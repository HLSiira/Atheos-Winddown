//////////////////////////////////////////////////////////////////////////////80
// WindDown
//////////////////////////////////////////////////////////////////////////////80
// Copyright (c) Atheos & Liam Siira (Atheos.io), distributed as-is and without
// warranty under the MIT License. See [root]/LICENSE.md for more.
// This information must remain intact.
//////////////////////////////////////////////////////////////////////////////80
// Description: 
// A reminder plugin to encourage users to stay healthy, inspired by the VS Code
// plugin of the same name: 
//			Winddown: https://github.com/schneefux/vscode-winddown
//												- Liam Siira
//////////////////////////////////////////////////////////////////////////////80



(function(global) {

	var atheos = global.atheos,
		carbon = global.carbon;

	var self = null;

	carbon.subscribe('system.loadExtra', () => atheos.winddown.init());

	atheos.winddown = {
		enabled: true,
		nextRest: null,
		restTime: 30, // minutes
		fadeTime: 5, // minutes

		init: function() {
			self = this;
			carbon.subscribe('settings.loaded settings.save', function() {
				self.enabled = atheos.storage('winddown.enabled') || self.enabled;
				self.restTime = atheos.storage('winddown.restTime') || self.restTime;
				self.fadeTime = atheos.storage('winddown.fadeTime') || self.fadeTime;
				self.nextRest = Date.now() + (self.restTime * 1000 * 60);

				if (self.enabled) {
					carbon.subscribe('chrono.mega', self.check);
				} else {
					carbon.unsubscribe('chrono.mega', self.check);
				}
			});
		},

		check: function() {
			var timeNow = Date.now(),
				restTime = self.restTime * 1000 * 60,
				fadeTime = self.fadeTime * 1000 * 60;

			if (timeNow > (self.nextRest - fadeTime)) {
				var fadeMin = self.nextRest - fadeTime,
					percent = (timeNow - fadeMin) / (self.nextRest - fadeMin);

				document.body.style.filter = 'grayscale(' + percent + ')';

				if (percent > 1) {
					carbon.unsubscribe('chrono.mega', self.check);
				}
			}
		},

		rest: function() {
			self.nextRest = Date.now() + (self.restTime * 1000 * 60);
			document.body.style.filter = '';
			if (self.enabled) {
				carbon.subscribe('chrono.mega', self.check);
			}
		}
	};
})(this);
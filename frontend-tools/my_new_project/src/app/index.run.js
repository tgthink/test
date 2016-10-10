(function() {
  'use strict';

  angular
    .module('myNewProject')
    .run(runBlock);

  /** @ngInject */
  function runBlock($log) {

    $log.debug('runBlock end');
  }

})();

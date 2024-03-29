(function(){
    var bigband = angular.module('bigband',['ngAnimate']);

    bigband.controller('bigbandCtrl',function($scope,$http,$sce){
        console.log("controller initialized");

        $scope.web;
        $scope.web_url = $sce.trustAsResourceUrl("http://"+$scope.web);
        $scope.resultados = {};
        $scope.mobile = false;
        $scope.checkFail = false;
        $scope.checkSuccess = false;
        $scope.score = "";


        $scope.resfeshIframe = function() { 
            document.getElementById('iframe').src = "http://"+$scope.web;
        };

        $scope.checkMobile = function(){
        		$scope.resfeshIframe();
        		$scope.checking = true;

        		/* MAILGUN */
        		/*$http.get('https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=http%3A%2F%2F'+ $scope.web +'&key=AIzaSyDrq5QFuJ1SwLANaMX-yViC8UfX0xve8ac&strategy=mobile',{})
        			.success(function(data){
        				console.log('mail sent: '+data)
        			})
        			.error(function(data){
        				console.log('mail not sent: '+data)
        			})*/

            $http.get('https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=http%3A%2F%2F'+ $scope.web +'&key=AIzaSyDrq5QFuJ1SwLANaMX-yViC8UfX0xve8ac&strategy=mobile',{})
            	.success(function(data){
            		console.log('success: '+data)
            		$scope.resultados = data;
            		$scope.score = $scope.resultados.ruleGroups.USABILITY.score;
            		if ($scope.score > 99) {
            			console.log($scope.resultados.ruleGroups.USABILITY.score);
            			$scope.mobile = true;
            			$scope.checking = false;
            			$scope.checkSuccess = true;
            			$scope.checkFail = false;
            		} else {
            			console.log($scope.resultados.ruleGroups.USABILITY.score);
            			$scope.mobile = false;
            			$scope.checking = false;
            			$scope.checkFail = true;
            			$scope.checkSuccess = false;
            		}
            	})
            	.error(function(data){
            		console.log('error: '+data)
            	})
        };
        
    });
})();



// // Specify your actual API key here:
// var API_KEY = 'AIzaSyDrq5QFuJ1SwLANaMX-yViC8UfX0xve8ac';

// // Specify the URL you want PageSpeed results for here:
// var URL_TO_GET_RESULTS_FOR = 'http://bueninvento.es';

// var API_URL = 'https://www.googleapis.com/pagespeedonline/v2/runPagespeed?';
// var CHART_API_URL = 'http://chart.apis.google.com/chart?';

// // Object that will hold the callbacks that process results from the
// // PageSpeed Insights API.
// var callbacks = {}

// // Invokes the PageSpeed Insights API. The response will contain
// // JavaScript that invokes our callback with the PageSpeed results.
// function runPagespeed() {
//   var s = document.createElement('script');
//   s.type = 'text/javascript';
//   s.async = true;
//   var query = [
//     'url=' + URL_TO_GET_RESULTS_FOR,
//     'callback=runPagespeedCallbacks',
//     'key=' + API_KEY,
//   ].join('&');
//   s.src = API_URL + query;
//   document.head.insertBefore(s, null);
// }

// // Our JSONP callback. Checks for errors, then invokes our callback handlers.
// function runPagespeedCallbacks(result) {
//   if (result.error) {
//     var errors = result.error.errors;
//     for (var i = 0, len = errors.length; i < len; ++i) {
//       if (errors[i].reason == 'badRequest' && API_KEY == 'yourAPIKey') {
//         alert('Please specify your Google API key in the API_KEY variable.');
//       } else {
//         // NOTE: your real production app should use a better
//         // mechanism than alert() to communicate the error to the user.
//         alert(errors[i].message);
//       }
//     }
//     return;
//   }

//   // Dispatch to each function on the callbacks object.
//   for (var fn in callbacks) {
//     var f = callbacks[fn];
//     if (typeof f == 'function') {
//       callbacks[fn](result);
//     }
//   }
// }

// // Invoke the callback that fetches results. Async here so we're sure
// // to discover any callbacks registered below, but this can be
// // synchronous in your code.
// setTimeout(runPagespeed, 0);
// callbacks.displayPageSpeedScore = function(result) {
//   var score = result.score;
//   // Construct the query to send to the Google Chart Tools.
//   var query = [
//     'chtt=Page+Speed+score:+' + score,
//     'chs=180x100',
//     'cht=gom',
//     'chd=t:' + score,
//     'chxt=x,y',
//     'chxl=0:|' + score,
//   ].join('&');
//   var i = document.createElement('img');
//   i.src = CHART_API_URL + query;
//   document.body.insertBefore(i, null);
// };
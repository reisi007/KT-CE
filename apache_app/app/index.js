"use strict";
let testApp = angular.module('ktce2016ss', []);
testApp.controller('MainController', ['$scope', '$interval', '$http', function ($scope, $interval, $http) {
    const fetchms = 1500;
    let interval;
    $scope.data = [];
    $scope.submit = function () {
        let text = $scope.text;
        let elem = document.getElementById('textField');
        $http({
            method: 'GET',
            url: 'add.php?data=' + text
        }).then(function suc(res) {
            if (res.data.result === 1) {
                elem.MaterialTextfield.change('');
                $scope.text = '';
            } else {
                console.log('error update', d);
            }
        }, function err(d) {
            console.log('error update', d);
        });
    };

    function updateData() {
        $http({
            method: 'GET',
            url: 'get.php'
        }).then(function suc(res) {

            $scope.data = res.data;
        }, function err(d) {
            console.log('error update', d);
        })
    }
    updateData();
    interval = $interval(function () {
        updateData();
    }, fetchms);
    $scope.$on('$destroy', function () {
        $interval.cancel(interval);
    })
}]);
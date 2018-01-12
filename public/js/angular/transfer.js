(function () {
    var app = angular.module('larapos', []);

    app.controller("SearchItemCtrl", ['$scope', '$http', function ($scope, $http) {
        $scope.items = [];
        $http.get('api/item').success(function (data) {
            $scope.items = data;
        });
        $scope.transfertemp = [];
        $scope.newtransfertemp = {};
        $http.get('api/transfertemp').success(function (data, status, headers, config) {
            $scope.transfertemp = data;
        });
        $scope.addTransferTemp = function (item, newtransfertemp) {
            $http
            .post('api/transfertemp', {
                item_id: item.id,
                cost_price: item.cost_price,
                total_cost: item.cost_price,
                type: item.type
            })
            .success(function (data, status, headers, config) {
                $scope.transfertemp.push(data);
                $http
                .get('api/transfertemp')
                .success(function (data) {
                    $scope.transfertemp = data;
                });
            });
        }
        $scope.updateTransferTemp = function (newtransfertemp) {
            $http
            .put('api/transfertemp/' + newtransfertemp.id, {
                quantity: newtransfertemp.quantity,
                total_cost: newtransfertemp.item.cost_price * newtransfertemp.quantity
            })
            .success(function (data, status, headers, config) {

            });
        }
        $scope.removeTransferTemp = function (id) {
            $http
            .delete('api/transfertemp/' + id)
            .success(function (data, status, headers, config) {
                $http.get('api/transfertemp').success(function (data) {
                    $scope.transfertemp = data;
                });
            });
        }
        $scope.sum = function (list) {
            var total = 0;
            angular.forEach(list, function (newtransfertemp) {
                total += parseFloat(newtransfertemp.item.cost_price * newtransfertemp.quantity);
            });
            return total;
        }
    }]);
})();

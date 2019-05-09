'use strict';

var app = angular.module('aircanada', []);

app.controller('formCtrl', function ($scope, $http) {

    $scope.formData = {"title": "TITLE", "company": "", "mediaType":{"advertising":false,"photo":false,"other":false,"logo":false}};

    $scope.submit = function() {
      $http({
          method: "post",
          url: "submit.php",
          data: $scope.formData
      }).success(
          function( data ) {
              $(".main-content").html(data);
          }
      );
    }
});

(function(routerApp) {
    'use strict';
    routerApp.factory('myService', MyService);
    MyService.$inject = ['$q', '$http'];

    function MyService($q, $http) {
        var data;
        var workCategory;
        var service = {
            getData: getData
        };
        return service;
        var promise = null;
        var loadingVal = 1;

        function makeRequest() {
            return $http.get('fishdata.json').then(function(resp) {
                return resp;
            });
        }

        function getData(update) {
            //animateStart(1);
            if (window.projectTitle) delete window.projectTitle;
            if (update || !this.promise) {
                this.promise = makeRequest();
            }
            //animateStart(0);
            return this.promise;
        }
    }
}(angular.module('routerApp')));
(function(routerApp) {
    'use strict';
    routerApp.factory('manageWorkCategory', ManageWorkCategory);
    ManageWorkCategory.$inject = ['$q', '$http'];

    function ManageWorkCategory($q, $http) {
        var workCategory = '';

        function getCategory() {
            return workCategory;
        }

        function setCategory(newCategory) {
            workCategory = newCategory;
        }
    }
}(angular.module('routerApp')));
routerApp.config(function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/home');
    $stateProvider.state('home', {
        name:'home',
        url: '/home',
        templateUrl: 'pages/partial-home.html',
        controller: function($scope, $http, $controller) {  }
        }).state('zones', {
        name:'zones',
        url: '/zones',
        templateUrl: 'pages/partial-zone.html',
        controller: function($scope, $http, $controller, myService) { 
            myService.getData().then(function(response) {
                console.log('response');
                console.log(response);
                $scope.myZones = response.data.zones;
            });
         }
        }).state('azones', {
        name:'azones',
        url: '/zones/:p',
        templateUrl: 'pages/partial-zone-param.html',
        controller: function($scope, $http, $stateParams, myService) {
            $scope.name = $stateParams.p;
            $scope.nameUpper = ($stateParams.p).toUpperCase();
            // make generic map            
            $scope.genericMap = $stateParams.p+'-zone.png';
            $scope.selectedMap = $stateParams.p+'-zone-selected.png';

            myService.getData().then(function(response) {
                $.each(response.data.zones, function(key,data){
                    console.log($stateParams.p+' == '+data.name);
                    if($stateParams.p==data.name){
                        $scope.selectedBrief = data.brief;
                        console.log($scope.selectedBrief);
                    }
                });
            });
        }
        }).state('fishlist', {
        name:'fishlist',
        url: '/fishlist',
        templateUrl: 'pages/partial-fishlist.html',
        controller: 'fishZoneController',
        }).state('afishlist', {
        name:'afishlist',
        url: '/fishlist/:p',
        templateUrl: 'pages/partial-fishlist.html',
        controller: 'fishZoneController',
        })/*.state('fishlist', {
        name:'fishlist',
        url: '/fishlist/asian',
        templateUrl: 'pages/partial-fishlist.html',
        controller: 'fishZoneController',
        }).state('fishlist', {
        name:'fishlist',
        url: '/fishlist/american',
        templateUrl: 'pages/partial-fishlist.html',
        controller: 'fishZoneController',
        }).state('fishlist', {
        name:'fishlist',
        url: '/fishlist/world',
        templateUrl: 'pages/partial-fishlist.html',
        controller: 'fishZoneController',
        })*/.state('fish', {
        name:'fish',
        url: '/fish/:p/:a',
        templateUrl: 'pages/partial-fish-detail.html',
        controller: function($scope, $http, $stateParams, myService) {
            $scope.zoneUpper = ($stateParams.p).toUpperCase();
            $scope.nameUpper = ($stateParams.a).toUpperCase();

            $scope.zone = ($stateParams.p);
            $scope.name = ($stateParams.a);
            $scope.fish = '';
            console.log('abcd');
            console.log($stateParams.a);

            if(!isNaN(($stateParams.a).indexOf('-'))){ 
                let arrName = ($stateParams.a).split('-');

                arrName.forEach( function( element, indexx) {   arrName[indexx] = arrName[indexx].charAt(0).toUpperCase() +arrName[indexx].slice(1); 
                });
                    

                $scope.name = arrName.join(' ').toUpperCase();
            }

            myService.getData().then(function(response) {
                //console.log();
                $.each(response.data.fish, function(key,val){
                    if(val.name.toLowerCase().trim() == $stateParams.a.toString().toLowerCase().trim() ){
                        $scope.fish = val;
                    }
                });

            });

            $(document).ready(function(){
                $('.fish-detail-slider').slick({
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      autoplay: false,
                      speed:1700,
                      arrows: true,
                      dots:true,
                      adaptiveHeight: false
                });

                $('.btn-habit-icon').click(function(){
                    $('.the-detail-container').hide();
                    $('.habitat-container').show();
                    $('.three-button-child-container div.active').removeClass('active');
                    $(this).addClass('active');
                });
                $('.btn-diet-icon').click(function(){
                    $('.the-detail-container').hide();
                    $('.diet-container').show();
                    $('.three-button-child-container div.active').removeClass('active');
                    $(this).addClass('active');
                });
                $('.btn-doyouknow-icon').click(function(){
                    $('.the-detail-container').hide();
                    $('.diduknow-container').show();
                    $('.three-button-child-container div.active').removeClass('active');
                    $(this).addClass('active');
                });
            });
        } });
});
routerApp.controller('fishZoneController', function($scope, $http, $stateParams, myService) {
    
    console.log('state params');
    console.log($stateParams);

    $scope.zoneUpper = ($stateParams.p).toUpperCase();
    $scope.nameUpper = ($stateParams.p).toUpperCase();

    $scope.zone = ($stateParams.p);
    $scope.name = ($stateParams.p);
    $scope.fish = new Array();
    


    myService.getData().then(function(response) {
        //console.log();
        var fishCount = 0;
        $.each(response.data.fish, function(key,val){
            if(val.zone.toLowerCase().trim() == $stateParams.p ){
                $scope.fish.push(val);                
                fishCount++;
            }
        });
        

        console.log($scope.fish);
        $scope.inndex = 0;
        $scope.fishLength = (0==fishCount%4)?parseInt(fishCount/4):parseInt(fishCount/4)+1;
        $scope.tempArray = new Array();
        for(var indexTemp =0; indexTemp<$scope.fishLength;indexTemp++){
            $scope.tempArray.push(indexTemp);
        }
        $scope.rowFish = -1;
        $scope.columnFish = 0;
        $scope.getNumber = function(num) {
            return new Array(num);   
        }
        $scope.getFishName = function(num){
            return $scope.fish[num].name;
        }        
        $scope.changeColumn = function(){
            
            $scope.columnFish = (3>= 1+$scope.columnFish)?parseInt($scope.columnFish)+1:1;
            return $scope.columnFish;        
        }
        $scope.getColumn = function(){
            
           return $scope.columnFish;
            //return $scope.rowFish = parseInt($scope.rowFish)+1;
        }
        $scope.changeRow = function(){
            
            
                $scope.rowFish = ($scope.fish.length> 1+$scope.rowFish)?parseInt($scope.rowFish)+1:0;
                return $scope.rowFish;        
             
        }
        $scope.getRow = function(){
            
           return $scope.rowFish;
            //return $scope.rowFish = (0==$scope.rowFish)?0:parseInt($scope.rowFish)+1;
        }
        

        setTimeout(function(){

            $(document).ready(function(){
                    
                $('.fishlistslider').slick({
                      slidesToShow: 3,
                      slidesToScroll: 1,
                      autoplay: false,
                      speed:1700,
                      arrows: true,
                      dots:true,
                      adaptiveHeight: false
                });
            });

        },0);
    });

    
    
});
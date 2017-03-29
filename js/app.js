

app.controller("galleryCtrl",function ($scope,$http) {

$scope.pics = ['1.jpg','2.jpg','3.html','4.html','5.html','6.html','8.html','9.html','11.html','12.html','13.html','14.html','15.html','16.html','17.html','18.html','19.html','20.html','21.html','22.html','23.html','24.html','25.html','26.html','27.html','28.html','29.html','30.html','31.html','32.html','33.html','34.html','35.html','36.html','37.html','38.html','39.html','44.html','45.html','49.html','48.html','50.html','47.html','43.html','46.jpg'];
$scope.selectedPic = '1.jpg';
$scope.show = function (num) {
      $scope.selectedPic = $scope.pics[num];
  }
});
$(window).scroll(function(){
    if  ($(window).scrollTop() == $(document).height() - $(window).height()){
        AddMoreContent();
    }
});

function AddMoreContent(){
    $.post('getMoreContent.php', function(data) {
        //Assuming the returned data is pure HTML
        $(data).insertBefore($('#placeHolder'));
    });
}
$.post('getMoreContent.php', 'lastId=' + lastId, function(data) {
    //Assuming the returned data is pure HTML
    $(data).insertBefore($('#placeHolder'));
});
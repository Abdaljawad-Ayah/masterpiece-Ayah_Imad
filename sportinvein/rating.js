$(document).ready(function () {
    resetStarColors();
    
    if (localStorage.getItem('ratedIndex') != null) {
    setStars(parseInt(localStorage.getItem('ratedIndex')));
    uID = localStorage.getItem('uID');
    }
    
    $('.fa-star').on('click', function () {
       ratedIndex = parseInt($(this).data('about-us'));
       localStorage.setItem('ratedIndex', ratedIndex);
       saveToTheDB();
    });
    
    $('.fa-star').mouseover(function () {
    resetStarColors();
    var currentIndex = parseInt($(this).data('about-us'));
    setStars(currentIndex);
    });
    
    $('.fa-star').mouseleave(function () {
    resetStarColors();
    
    if (ratedIndex != -1)
    setStars(ratedIndex);
    });
    });
    

    // AJAX
    function saveToTheDB() {
    $.ajax({
       url: "about-us.php",
       method: "POST",
       dataType: 'json',
       data: {
       save: 1,
       uID: uID,
       ratedIndex: ratedIndex
       }, success: function (r) {
    uID = r.id;
    localStorage.setItem('uID', uID);
       }
    });
    }
    
    function setStars(max) {
    for (var i=0; i <= max; i++)
    $('.fa-star:eq('+i+')').css('color', 'yellow');
    }
    
    function resetStarColors() {
    $('.fa-star').css('color', 'white');
    }
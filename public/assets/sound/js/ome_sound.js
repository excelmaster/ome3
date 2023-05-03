var myAudio = document.getElementById("menuAudio")
// menu 
$('[class*="img-menu"]').mouseover(function(e){
    //instance element
    menuAudio.volume = 0.2
    menuAudio.play()    
})

$('[class*="img-menu"]').mouseleave(function(e){
    //instance element
    menuAudio.pause() 
    menuAudio.currentTime = 0   
})

//Courses
$('[class*="img-mundos"]').mouseover(function(e){
    //instance element
    contentAudio.volume = 0.2
    contentAudio.play()    
})

$('[class*="img-mundos"]').mouseleave(function(e){
    //instance element
    contentAudio.pause() 
    contentAudio.currentTime = 0   
})

// Lessons
$('[class*="img-lesson"]').mouseover(function(e){
    //instance element
    contentAudio.volume = 0.2
    contentAudio.play()    
})

$('[class*="img-lesson"]').mouseleave(function(e){
    //instance element
    contentAudio.pause() 
    contentAudio.currentTime = 0   
})

// activities
$('[class*="activity-card"]').mouseover(function(e){
    //instance element
    contentAudio.volume = 0.2
    contentAudio.play()    
})

$('[class*="activity-card"]').mouseleave(function(e){
    //instance element
    contentAudio.pause() 
    contentAudio.currentTime = 0   
})
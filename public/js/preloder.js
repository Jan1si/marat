/ WRAPPER /

// var
//     images = document.images,
//     images_total_count = images.length,
//     images_loader_count = 0,
//     preloader = document.getElementById('page-preloader'),
//     perc_display = document.getElementById('load_perc');
//
// for (var i = 0; i < images_total_count; i++)
// {
//     image_clone = new Image();
//     image_clone.onload = image_loaded;
//     image_clone.onerror = image_loaded;
//     image_clone.src = images[i].src;
// }
//
//  function image_loaded(){
//     images_loaded_count++;
//     perc_display.innerHTML = (((100/ images_total_count)* images_loaded_count) << 0 ) + '%';
//     if (images_loaded_count >= images_total_count)
//     {
//         setTimeout(function (){
//             if(!preloader.classList.contains('done'))
//             {
//                 preloader.classList.add('done');
//             }
//         }, 1000);
//     }
//  }

document.body.onload = function ( ) {
    setTimeout(function (){
        var move1 = document.getElementById('page-bookshelf_wrapper');
        if (!move1.classList.contains('done'))
        {
            move1.classList.add('done');
        }
    },1500);
}

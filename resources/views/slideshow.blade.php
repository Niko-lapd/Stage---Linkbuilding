<script> 
      var i = 0,img = ["/img/slideshow/1.png",
                       "/img/slideshow/2.png",                     
                       "/img/slideshow/3.png",
                       "/img/slideshow/4.png",                    
                       "/img/slideshow/5.png"] ;

        function mySlide(param)
        {
            if(param === 'next')
            {
                i++;
                if(i === img.length) { i = img.length - 1;}
            } else  {
                i--;
                if(i < 0) {i = 0; }
            }
            document.getElementById('slide').src = img[i];
        }    
</script>
<div>
            <img src="/img/slideshow/1.png" id ="slide" alt="" width="705" height="320">
          <button class="slidertjebuttontje1" onclick="mySlide('prev');"><</button>
          <button class="slidertjebuttontje2" onclick="mySlide('next');">></button>
</div>


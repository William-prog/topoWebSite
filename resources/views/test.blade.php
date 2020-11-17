<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<style>
.reveal-holder {
  position: relative;
  display: inline-block;
  overflow: hidden;
}

.reveal-block {
  position: absolute;
  top: 0;
  width: 50%;
  height: 101%;
  background: white;
}

.reveal-block::before {
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: lightgray;
  transition-property: transform;
  transition-duration: 0.5s;
}

.reveal-block.right::before {
  transform: scaleX(0);
  transform-origin: 0% 100%;
}

.reveal-block.right.aos-animate::before {
  transform: scaleX(1);
}

[data-aos="reveal-right"] {
  transform: scaleX(1);
  transform-origin: 100% 0%;
  transition-property: transform;
  transition-delay: 0.5s;
}

[data-aos="reveal-right"].aos-animate {
  transform: scaleX(0);
}

[data-aos="reveal-item"] {
  visibility: hidden;
  transition-property: visibility;
  transition-duration: 0s;
}

[data-aos="reveal-item"].aos-animate {
  visibility: visible;
}
</style>

<body>
    <div class="reveal-holder" data-aos="reveal-item">
        <div class="reveal-block right" data-aos="reveal-right"></div>
        <img width="50%"  src="img/history-image.JPG" alt="" class="radius-20">                    
    </div>
</body>
</html>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
  once: true
});

</script>
<?php
// Optional: simulate some loading delay (e.g., database query)
sleep(2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hello World Loader</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 100px;
    }

/* From Uiverse.io by satyamchaudharydev */ 
.spinner {
 --size: 30px;
 --first-block-clr: #005bba;
 --second-block-clr: #fed500;
 --clr: #111;
 width: 100px;
 height: 100px;
 position: relative;
}

.spinner::after,.spinner::before {
 box-sizing: border-box;
 position: absolute;
 content: "";
 width: var(--size);
 height: var(--size);
 top: 50%;
 animation: up 2.4s cubic-bezier(0, 0, 0.24, 1.21) infinite;
 left: 50%;
 background: var(--first-block-clr);
}

.spinner::after {
 background: var(--second-block-clr);
 top: calc(50% - var(--size));
 left: calc(50% - var(--size));
 animation: down 2.4s cubic-bezier(0, 0, 0.24, 1.21) infinite;
}

@keyframes down {
 0%, 100% {
  transform: none;
 }

 25% {
  transform: translateX(100%);
 }

 50% {
  transform: translateX(100%) translateY(100%);
 }

 75% {
  transform: translateY(100%);
 }
}

@keyframes up {
 0%, 100% {
  transform: none;
 }

 25% {
  transform: translateX(-100%);
 }

 50% {
  transform: translateX(-100%) translateY(-100%);
 }

 75% {
  transform: translateY(-100%);
 }
}

  </style>
</head>
<body>

<!-- Loader -->
<!-- From Uiverse.io by satyamchaudharydev --> 

<div id="loader" class="spinner"></div>
<!-- Actual content -->
<div id="content">
  <h1>Hello World</h1>
</div>

<!-- JavaScript to hide loader after page loads -->
<script>
  window.addEventListener('load', function () {
    document.getElementById('loader').style.display = 'none';
    document.getElementById('content').style.display = 'block';
  });
</script>

</body>
</html>

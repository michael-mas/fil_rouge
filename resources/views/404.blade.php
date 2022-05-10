
<style>
    @import "compass/css3";
 * {
	 box-sizing: border-box;
	 margin: 0;
}
 body {
	 position: absolute;
	 top: 0;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 overflow: hidden;
}
 .wrap {
	 height: 100%;
	 width: 100%;
	 margin: auto;
	 background: rgba(92, 61, 61, 1) radial-gradient(rgba(143, 61, 61, 1), rgba(31, 20, 20, 1));
}
 .knife {
	 height: 300px;
	 width: 80px;
	 position: absolute;
	 top: 40%;
	 margin-top: -150px;
	 transform-origin: 50% 60%;
}
 .knife:nth-child(1) {
	 transform: rotate(380deg);
	 left: 50%;
	 transition: left 2s ease, transform 2s ease;
}
 .knife:nth-child(1) .blade, .knife:nth-child(1) .shaft {
	 border-right: 10px rgba(0, 0, 0, .1) solid;
}
 .knife:nth-child(1) .blade {
	 border-top-right-radius: 25%;
}
 .knife:nth-child(1) .cap {
	 border-right: 10px rgba(255, 255, 255, .1) solid;
}
 .knife:nth-child(1) .cap, .knife:nth-child(1) .shaft {
	 left: 0;
}
 .knife:nth-child(2) {
	 transform: rotate(-380deg);
	 right: 50%;
	 transition: right 2s ease, transform 2s ease;
}
 .knife:nth-child(2) .blade, .knife:nth-child(2) .shaft {
	 border-left: 10px rgba(0, 0, 0, .1) solid;
}
 .knife:nth-child(2) .blade {
	 border-top-left-radius: 25%;
}
 .knife:nth-child(2) .cap {
	 border-left: 10px rgba(255, 255, 255, .1) solid;
}
 .knife:nth-child(2) .cap, .knife:nth-child(2) .shaft {
	 right: 0;
}
 .wrap:hover .knife:nth-child(1) {
	 left: 0;
	 transform: rotate(-150deg);
}
 .wrap:hover .knife:nth-child(2) {
	 right: 0;
	 transform: rotate(150deg);
}
 .blade {
	 height: 67%;
	 width: 100%;
	 background: rgba(204, 238, 255, 1);
	 position: relative;
}
 .cap {
	 height: 10%;
	 width: 30%;
	 background: rgba(102, 102, 102, 1);
}
 .shaft {
	 height: 23%;
	 width: 30%;
	 bottom: 0;
	 background: rgba(195, 195, 116, 1);
}
 .cap, .shaft {
	 position: absolute;
}

.quatre{
    position: absolute;
    background-color: rgba(0, 0, 0, 0);
    top: 70%;
    left: 42%;
    font-size: 150px;
    color: white;
}

.logo{
    background-color: rgba(0, 0, 0, 0);
    position: absolute;
    top: 15%;
    left: 46.5%;
}

.info {
  position:absolute;
  top: 75%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.glitch-bloc {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
.glitchedAnim,
.invisible-text {
  font-family: Unica One, sans-serif;
  font-size: 250px;
  font-weight: 400;
  line-height: 1.1;
  color: #fff;
}
.glitchedAnim {
  position: absolute;
  top: 0;
  opacity: 0.9;
}
.invisible-text {
  visibility: hidden;
}
.glitchedAnim:nth-child(2) {
  color: #f03e3e;
  animation: skewAnim 3s infinite;
}
.glitchedAnim:nth-child(3) {
  color: #3df0cf;
  animation: glitchAnim2 3s infinite;
}
.glitchedAnim:nth-child(4) {
  color: #f1f1f1;
  animation: glitchAnim1 3s infinite;
}

.txt-info {
  font-family: Open Sans, sans-serif;
  color: #f1f1f1;
  font-size: 20px;
}


@keyframes glitchAnim1 {
  7% {
    transform: none;
  }
  10% {
    transform: translate(6px, -2px);
  }
  13% {
    transform: none;
  }
  20% {
    transform: none;
  }
  23% {
    transform: translate(-12px, -7px);
  }
  26% {
    transform: none;
  }
  40% {
    transform: none;
  }
  43% {
    transform: translate(10px, -9px);
  }
  46% {
    transform: none;
  }
  65% {
    transform: none;
  }
  68% {
    transform: translate(7px, 5px);
  }
  71% {
    transform: none;
  }
  100% {
    transform: none;
  }
}



@keyframes glitchAnim2 {
  7% {
    transform: none;
  }
  10% {
    transform: translate(-6px, 2px);
  }
  13% {
    transform: none;
  }
  20% {
    transform: none;
  }
  23% {
    transform: translate(12px, 7px);
  }
  26% {
    transform: none;
  }
  40% {
    transform: none;
  }
  43% {
    transform: translate(-10px, 9px);
  }
  46% {
    transform: none;
  }
  65% {
    transform: none;
  }
  68% {
    transform: translate(-7px, 5px);
  }
  71% {
    transform: none;
  }
  100% {
    transform: none;
  }
}



@keyframes skewAnim {
  20% {
    transform: none;
  }
  23% {
    transform: skew(5deg, -5deg) translate(10px, 5px);
  }
  26% {
    transform: none;
  }
  40% {
    transform: none;
  }
  43% {
    transform: skew(5deg, -10deg) translate(-5px, 2px);
  }
  46% {
    transform: none;
  }
  100% {
    transform: none;
  }
}

</style>

<a href="{{url('/')}}"><img width="7%" class="logo" src="admin/assets/images/logo-mini.svg" alt="logo" /></a>

<div class="info">
    <div class="glitch-bloc">
        <p class="invisible-text">404</p>
        <p class="glitchedAnim">404</p>
        <p class="glitchedAnim">404</p>
        <p class="glitchedAnim">404</p>
    </div>
</div>

<div class="wrap">
    <div class="knife">
      <div class="blade"></div>
      <div class="cap"></div>
      <div class="shaft"></div>
    </div>
    <div class="knife">
      <div class="blade"></div>
      <div class="cap"></div>
      <div class="shaft"></div>
    </div>
  </div>

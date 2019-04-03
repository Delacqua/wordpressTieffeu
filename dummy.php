.submenu {
  position: relative;
  list-style: none;
  width: 80%;
  margin: 0 auto;
}

@media screen and (max-width: 600px) {
  .submenu {
    width: 100%;
  }
}

.submenu li {
  position: relative;
  float: left;
  margin-right: 15px;
  margin-bottom: 10px;
  width: 14vw;
  min-width: 100px;
  height: 14vw;
  min-height: 100px;
  border: 5px solid #148ba1;
}

@media screen and (max-width: 800px) {
  .submenu li{
    border: 3px solid #148ba1;
  }
}

.submenu li:nth-child(1n) { border-color: #f3e40f; }
.submenu li:nth-child(2n) { border-color: #ee0300; }
.submenu li:nth-child(3n) { border-color: #07a2ff; }
.submenu li:nth-child(4n) { border-color: #ffffff; }
.submenu li:nth-child(5n) { border-color: #fa13af; }
.submenu li:nth-child(6n) { border-color: #008b00; }

.submenu img {
  width: 100%;
  height: 100%;
  object-fit:cover;
}

.submenu h4 {
  position: absolute;
  padding: 0;
  margin: 0;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(0,153,255,0);
}

.submenu h4 span {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 14vw;
  min-width: 100px;
  padding-bottom: 5px;
  padding-top: 5px;
  font-size: 2em;
  text-shadow: 2px 2px #000000;
  text-align: center;
  background-color: rgba(0, 20, 51, 0.6);
}

.submenu li:nth-child(1n) h4 { color: #f3e40f; }
.submenu li:nth-child(2n) h4 { color: #ffffff; }
.submenu li:nth-child(3n) h4 { color: #07a2ff; }
.submenu li:nth-child(4n) h4 { color: #ffffff; }
.submenu li:nth-child(5n) h4 { color: #fa13af; }
.submenu li:nth-child(6n) h4 { color: #008b00; }

.submenu li:hover h4{
  background-color: rgba(0,153,255,0.3);
}
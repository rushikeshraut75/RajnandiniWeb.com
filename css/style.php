<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

*{ margin: 0; padding:0; font-family: 'Muli', sans-serif; box-sizing: border-box; }
		

.btn-facebook {
    background-color: #405D9D!important;
    
}
.btn-gmail {
    background-color: 	#ea4335!important;
   
}


}


.contact_btn a{
    background-color: #d465ef;
    padding: 12px 26px;
    font-style: 14px;
    font-weight: 500;
    border:1px solid transparent;
    text-transform: capitalize;
}

.contact_btn a:hover{
   
}

/*///////// center-content ///////////*/

.center_content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.center_content h1{
    color: #fff;
    font-size: 70px;
    text-transform: capitalize;
    font-weight: 700;
    margin-bottom: 10px;
    /*z-index: 1;*/
}

.center_content h2{
    font-size: 25px;
    font-weight: 400;
    color: #fff;
    text-transform: capitalize;
    /*z-index: 1;*/
}

.center_content h2:before{
    content: "";
    width: 80px;
    height: auto;
    border:2px solid #fff;
    position: absolute;
    left: 40px;
    bottom: 0;
    margin-bottom: 10px;
}

/*////////// font aweosme style ///////////////*/

.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar > ul > li {
  padding: 10px 0 10px 24px;
}

.navbar a {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 3px;
  font-family: "Poppins", sans-serif;
  font-size: 15px;
  font-weight: 600;
  color: rgba(255, 255, 255, 0.7);
  white-space: nowrap;
  transition: 0.3s;
  position: relative;
}

.navbar a i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar > ul > li > a:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: -5px;
  left: 0;
  background-color: #fff;
  visibility: hidden;
  width: 0px;
  transition: all 0.3s ease-in-out 0s;
}

.navbar a:hover:before, .navbar li:hover > a:before, .navbar .active:before {
  visibility: visible;
  width: 100%;
}

.navbar a:hover, .navbar .active, .navbar li:hover > a {
  color: #fff;
}

.navbar .getstarted {
  padding: 8px 25px;
  margin-left: 30px;
  border-radius: 5px;
  color: #fff;
  transition: 0.3s;
  font-size: 14px;
  font-weight: 600;
  border: 2px solid rgba(255, 255, 255, 0.5);
}

.navbar .getstarted:hover {
  color: #fff;
  border-color: #fff;
}

.navbar .getstarted:before, .navbar li:hover > .getstarted:before {
  visibility: hidden;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 24px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  color: #2c4964;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  color: #5846f9;
}

.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }
  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(28, 47, 65, 0.9);
  transition: 0.3s;
  z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile > ul > li {
  padding: 0;
}

.navbar-mobile a {
  padding: 10px 20px;
  font-size: 15px;
  color: #2c4964;
}

.navbar-mobile a:hover:before, .navbar-mobile li:hover > a:before, .navbar-mobile .active:before {
  visibility: hidden;
}

.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
  color: #5846f9;
}

.navbar-mobile .getstarted {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
  color: #5846f9;
}

.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}



	</style>
</head>
<body>

</body>
</html>
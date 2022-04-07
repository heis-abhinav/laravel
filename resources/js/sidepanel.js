const panelmethods = {
	openNav : function (event)
                {
                    if(document.getElementById("sidebar-wrapper").style.width == "250px"){
                        document.getElementById("sidebar-wrapper").style.width = "0";
                        //document.getElementById("main").style.marginLeft= "0";
                    }else{
                        document.getElementById("sidebar-wrapper").style.width = "250px";
                        //document.getElementById("main").style.marginLeft = "250px";
                    }
                     
                }
}

export default panelmethods;
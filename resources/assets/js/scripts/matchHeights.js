(function(){
  
  function matchHeight(elementClass){


    
    var sortableList = document.getElementsByClassName(elementClass);
  
    if(sortableList){
    
      var heights = [];
    
      for(var i = 0, x = sortableList.length; i < x; i++){
        if(sortableList[i].style && sortableList[i].style.height){
          sortableList[i].style.height = '';
        }
        heights.push(sortableList[i].clientHeight);
      };
      
      var max = Math.max.apply( Math, heights );
      
      
      console.log(max);
      
      for(var j = 0, y = sortableList.length; j < y; j++){
        sortableList[j].style.height = max + 'px';
        console.log(sortableList[j]);
      }
    };
    
  }
  matchHeight('hauteur');
  matchHeight('hauteur_2');
  
  function run(){
    matchHeight('hauteur');
    matchHeight('hauteur_2');
  }
  
  window.onresize = run;
  
})();
<h5><i class="fa fa-check-square-o fa-fw"></i>Dados Principais</h5>
<hr>

<div class="row">
	
    <div class="col-md-8">
        <div id="columns">
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
            <div class="column" draggable="true"></div>
        </div>

    
        
       
    </div>
    
    
    <div class="col-md-4">
    	<div class="card">
        	<h6 class="card-header">Kit montado</h6>
            <div class="card-body">
            
                <div class="form-row">

                     
                
                </div>
                                
            </div>
        </div>
     </div>

<script>
    function handleDragStart(e) {
    this.style.opacity = '0.4';  // this / e.target is the source node.
    }

    function handleDragOver(e) {
        if (e.preventDefault) {
        e.preventDefault(); // Necessary. Allows us to drop.
    }

    e.dataTransfer.dropEffect = 'move';  // See the section on the DataTransfer object.

    return false;
    }   

    function handleDragEnter(e) {
    // this / e.target is the current hover target.
    this.classList.add('over');
    }

    function handleDragLeave(e) {
        this.classList.remove('over');  // this / e.target is previous target element.
    }

    var cols = document.querySelectorAll('#columns .column');
    [].forEach.call(cols, function(col) {
    col.addEventListener('dragstart', handleDragStart, false);
    col.addEventListener('dragenter', handleDragEnter, false);
    col.addEventListener('dragover', handleDragOver, false);
    col.addEventListener('dragleave', handleDragLeave, false);
    });



</script>
     


</div>



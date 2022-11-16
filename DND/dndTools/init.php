
<div class="row">  

      <div class="col">  

 <ol> 
    <li>Enter as many names as you please.</li>
    <li>Roll initiative.</li>
    <li>Drag and drop rows to set preferred order.</li>
    <!-- <li>Click "Add" to increase the number of tracker slots.</li> -->
    </ol>
  
  </div>



  <div class="col">
    <div class="alert alert-info">
    <p class="text-muted text-center">This does not work on mobile yet. I'm working on it.</p>
    </div>
  </div>

</div>
<div class="row">  
  <div class="col">
    <ul id="initsParent" class="list-group">
      <li draggable="true" class="box list-group-item"><input type="text" class="form-control" placeholder="Enter a name..." /></li>
      <li draggable="true" class="box list-group-item"><input type="text" class="form-control" placeholder="Enter a name..." /></li>
      <li draggable="true" class="box list-group-item"><input type="text" class="form-control" placeholder="Enter a name..." /></li>
      <li draggable="true" class="box list-group-item"><input type="text" class="form-control" placeholder="Enter a name..." /></li>
      <li draggable="true" class="box list-group-item"><input type="text" class="form-control" placeholder="Enter a name..." /></li>
      <li draggable="true" class="box list-group-item"><input type="text" class="form-control" placeholder="Enter a name..." /></li>
      <li draggable="true" class="box list-group-item"><input type="text" class="form-control" placeholder="Enter a name..." /></li>
      <li draggable="true" class="box list-group-item"><input type="text" class="form-control" placeholder="Enter a name..." /></li>
      <li draggable="true" class="box list-group-item"><input type="text" class="form-control" placeholder="Enter a name..." /></li>
      <li draggable="true" class="box list-group-item"><input type="text" class="form-control" placeholder="Enter a name..." /></li>
      <li draggable="true" class="box list-group-item"><input type="text" class="form-control" placeholder="Enter a name..." /></li>
      <li draggable="true" class="box list-group-item"><input type="text" class="form-control" placeholder="Enter a name..." /></li>
    </ul>
  </div>
</div>


<script type="text/javascript">


  document.addEventListener('DOMContentLoaded', (event) => {

  var dragSrcEl = null;

  function handleDragStart(e) {
    this.style.opacity = '0.4';
    
    dragSrcEl = this;

    e.dataTransfer.effectAllowed = 'move';
    e.dataTransfer.setData('text/html', this.innerHTML);
  }

  function handleDragOver(e) {
    if (e.preventDefault) {
      e.preventDefault();
    }

    e.dataTransfer.dropEffect = 'move';
    
    return false;
  }

  function handleDragEnter(e) {
    this.classList.add('over');
  }

  function handleDragLeave(e) {
    this.classList.remove('over');
  }

  function handleDrop(e) {
    if (e.stopPropagation) {
      e.stopPropagation(); // stops the browser from redirecting.
    }
    
    if (dragSrcEl != this) {
      dragSrcEl.innerHTML = this.innerHTML;
      this.innerHTML = e.dataTransfer.getData('text/html');
      var inits=$('initsParent').children();
      for (var i = 0; i < inits.length; i++) {
        inits[i].find('span.badge').html(i);
      }
    }

    return false;
  }

  function handleDragEnd(e) {
    this.style.opacity = '1';
    
    items.forEach(function (item) {
      item.classList.remove('over');
    });
  }


  let items = document.querySelectorAll('.container .box');
  items.forEach(function(item) {
    item.addEventListener('dragstart', handleDragStart, false);
    item.addEventListener('dragenter', handleDragEnter, false);
    item.addEventListener('dragover', handleDragOver, false);
    item.addEventListener('dragleave', handleDragLeave, false);
    item.addEventListener('drop', handleDrop, false);
    item.addEventListener('dragend', handleDragEnd, false);
  });
  });
</script>






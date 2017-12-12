<br>
<div class="row">
    <div class="col ml-3 mt-5">
        <div class="input-group">
            <input type="text" class="form-control" id="codename" name="codename" value="<?php if(isset($viewfileName))
            {echo $viewfileName; }else {echo "";} ?>" aria-label="Untitled " placeholder="Untitle">
        </div>
    </div>
</div>


<div class="row">


  
    <div class="col" id="htmlhideShow">
        <div class="card-header ml-2">
            HTML
            <!-- <button type="button" class="close" data-dismiss="modal"></button> -->
        </div>
        
        <textarea id="htmlPanel" class="form-control" placeholder="HTML code " rows="6"><?php if(isset($viewHTML)){echo $viewHTML; }else {echo "";}?></textarea>
        
    </div>
   

    <div class="col" id="csshideShow">
        <div class="card-header">
            CSS
        </div>

        <textarea id="cssPanel" class="form-control" placeholder="CSS code " rows="6"><?php if(isset($viewCSS)){echo $viewCSS; }else {echo "";}?></textarea>
    </div>

    <div class="col" id="jshideShow">
        <div class="card-header">
            Javascript
        </div>

        <textarea id="javascriptPanel" class="form-control" placeholder="Javascript code" rows="6"><?php if(isset($viewJS)){echo $viewJS; }else {echo "";}?></textarea>
    </div>


</div>

<div class="w-100"></div>

<div class="col">
    <div class="card-header">
        Output
    </div>

    <iframe id="outputPanel" width="100%" height="25%" style="border: 1px solid #2222;left:5;"></iframe>
</div>
<div id="testmodal" class="premodal" tabindex="-1" style="display: none;">
    
                <span class="preclose" closemodal='testmodal' >&times;</span>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="blue bigger">Please fill the following form fields</h4>
            </div>
           <div class="modal-body">
                <form class="form-horizontal" role="form">
                        <div id="output">this is test</div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">عنوان خدمت </label>
                        <div >
                            <input id="title" placeholder="عنوان خدمت" class="form-control" type="text" value=''>
                        </div>
                       <div>
						    <label for="form-field-8">خلاصه متن</label>
					    	<textarea class="form-control" id="form-field-8" placeholder="خلاصه متن"></textarea>
						</div>
                        <div>
                            <div class="wysiwyg-toolbar btn-toolbar center    wysiwyg-style1"> <div class="btn-group">  <a class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font"><i class=" ace-icon fa fa-font"></i><i class=" ace-icon fa fa-angle-down icon-on-right"></i></a>  <ul class="dropdown-menu dropdown-light dropdown-caret"> <li><a data-edit="fontName Arial" style="font-family:'Arial'">Arial</a></li>  <li><a data-edit="fontName Courier" style="font-family:'Courier'">Courier</a></li>  <li><a data-edit="fontName Comic Sans MS" style="font-family:'Comic Sans MS'">Comic Sans MS</a></li>  <li><a data-edit="fontName Helvetica" style="font-family:'Helvetica'">Helvetica</a></li>  <li><a data-edit="fontName Open Sans" style="font-family:'Open Sans'">Open Sans</a></li>  <li><a data-edit="fontName Tahoma" style="font-family:'Tahoma'">Tahoma</a></li>  <li><a data-edit="fontName Verdana" style="font-family:'Verdana'">Verdana</a></li>  </ul> </div> <div class="btn-group">  <a class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Font Size"><i class=" ace-icon fa fa-text-height"></i>&nbsp;<i class=" ace-icon fa fa-angle-down icon-on-right"></i></a>  <ul class="dropdown-menu dropdown-light dropdown-caret">  <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>  <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>  <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>  </ul>  </div> <div class="btn-group">  <a class="btn btn-sm btn-info" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class=" ace-icon fa fa-bold"></i></a>  <a class="btn btn-sm btn-info" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)"><i class=" ace-icon fa fa-italic"></i></a>  <a class="btn btn-sm btn-info" data-edit="strikethrough" title="" data-original-title="Strikethrough"><i class=" ace-icon fa fa-strikethrough"></i></a>  <a class="btn btn-sm btn-info" data-edit="underline" title="" data-original-title="Underline"><i class=" ace-icon fa fa-underline"></i></a>  </div> <div class="btn-group">  <a class="btn btn-sm btn-success" data-edit="insertunorderedlist" title="" data-original-title="Bullet list"><i class=" ace-icon fa fa-list-ul"></i></a>  <a class="btn btn-sm btn-success" data-edit="insertorderedlist" title="" data-original-title="Number list"><i class=" ace-icon fa fa-list-ol"></i></a>  <a class="btn btn-sm btn-purple" data-edit="outdent" title="" data-original-title="Reduce indent (Shift+Tab)"><i class=" ace-icon fa fa-outdent"></i></a>  <a class="btn btn-sm btn-purple" data-edit="indent" title="" data-original-title="Indent (Tab)"><i class=" ace-icon fa fa-indent"></i></a>  </div> <div class="btn-group">  <a class="btn btn-sm btn-primary active" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class=" ace-icon fa fa-align-left"></i></a>  <a class="btn btn-sm btn-primary" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class=" ace-icon fa fa-align-center"></i></a>  <a class="btn btn-sm btn-primary" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class=" ace-icon fa fa-align-right"></i></a>  <a class="btn btn-sm btn-inverse" data-edit="justifyfull" title="" data-original-title="Justify (Ctrl/Cmd+J)"><i class=" ace-icon fa fa-align-justify"></i></a>  </div> <div class="btn-group">  <div class="btn-group"> <a class="btn btn-sm btn-pink dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink"><i class=" ace-icon fa fa-link"></i></a>  <div class="dropdown-menu dropdown-caret dropdown-menu-right">							 <div class="input-group">								<input class="form-control" placeholder="URL" data-edit="createLink" type="text">								<span class="input-group-btn">									<button class="btn btn-sm btn-primary" type="button">Add</button>								</span>							 </div>						</div> </div> <a class="btn btn-sm btn-pink" data-edit="unlink" title="" data-original-title="Remove Hyperlink"><i class=" ace-icon fa fa-chain-broken"></i></a>  </div> <div class="btn-group">  <div class="btn-group"> <a class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Insert picture"><i class=" ace-icon fa fa-picture-o"></i></a>  <div class="dropdown-menu dropdown-caret dropdown-menu-right">							 <div class="input-group">								<input class="form-control" placeholder="Image URL" data-edit="insertImage" type="text">								<span class="input-group-btn">									<button class="btn btn-sm btn-primary" type="button">Insert</button>								</span>							 </div><div class="space-2"></div>							 <label class="center block no-margin-bottom">								<button class="btn btn-sm btn-success wysiwyg-choose-file" type="button"><i class=" ace-icon fa fa-file"></i> Choose Image …</button>								<input data-edit="insertImage" type="file">							  </label> </div> </div> </div> <div class="btn-group">  <select class="hide wysiwyg_colorpicker" title="Change Color">  <option value="#ac725e">#ac725e</option>  <option value="#d06b64">#d06b64</option>  <option value="#f83a22">#f83a22</option>  <option value="#fa573c">#fa573c</option>  <option value="#ff7537">#ff7537</option>  <option value="#ffad46">#ffad46</option>  <option value="#42d692">#42d692</option>  <option value="#16a765">#16a765</option>  <option value="#7bd148">#7bd148</option>  <option value="#b3dc6c">#b3dc6c</option>  <option value="#fbe983">#fbe983</option>  <option value="#fad165">#fad165</option>  <option value="#92e1c0">#92e1c0</option>  <option value="#9fe1e7">#9fe1e7</option>  <option value="#9fc6e7">#9fc6e7</option>  <option value="#4986e7">#4986e7</option>  <option value="#9a9cff">#9a9cff</option>  <option value="#b99aff">#b99aff</option>  <option value="#c2c2c2">#c2c2c2</option>  <option value="#cabdbf">#cabdbf</option>  <option value="#cca6ac">#cca6ac</option>  <option value="#f691b2">#f691b2</option>  <option value="#cd74e6">#cd74e6</option>  <option value="#a47ae2">#a47ae2</option>  <option value="#444444">#444444</option>  </select><div class="dropdown dropdown-colorpicker">		<a data-toggle="dropdown" class="dropdown-toggle" data-position="auto"><span class="btn-colorpicker" style="background-color:#ac725e" data-original-title="" title=""></span></a><ul class="dropdown-menu dropdown-caret dropdown-menu-right"><li><a class="colorpick-btn selected" style="background-color:#ac725e;" data-color="#ac725e"></a></li><li><a class="colorpick-btn" style="background-color:#d06b64;" data-color="#d06b64"></a></li><li><a class="colorpick-btn" style="background-color:#f83a22;" data-color="#f83a22"></a></li><li><a class="colorpick-btn" style="background-color:#fa573c;" data-color="#fa573c"></a></li><li><a class="colorpick-btn" style="background-color:#ff7537;" data-color="#ff7537"></a></li><li><a class="colorpick-btn" style="background-color:#ffad46;" data-color="#ffad46"></a></li><li><a class="colorpick-btn" style="background-color:#42d692;" data-color="#42d692"></a></li><li><a class="colorpick-btn" style="background-color:#16a765;" data-color="#16a765"></a></li><li><a class="colorpick-btn" style="background-color:#7bd148;" data-color="#7bd148"></a></li><li><a class="colorpick-btn" style="background-color:#b3dc6c;" data-color="#b3dc6c"></a></li><li><a class="colorpick-btn" style="background-color:#fbe983;" data-color="#fbe983"></a></li><li><a class="colorpick-btn" style="background-color:#fad165;" data-color="#fad165"></a></li><li><a class="colorpick-btn" style="background-color:#92e1c0;" data-color="#92e1c0"></a></li><li><a class="colorpick-btn" style="background-color:#9fe1e7;" data-color="#9fe1e7"></a></li><li><a class="colorpick-btn" style="background-color:#9fc6e7;" data-color="#9fc6e7"></a></li><li><a class="colorpick-btn" style="background-color:#4986e7;" data-color="#4986e7"></a></li><li><a class="colorpick-btn" style="background-color:#9a9cff;" data-color="#9a9cff"></a></li><li><a class="colorpick-btn" style="background-color:#b99aff;" data-color="#b99aff"></a></li><li><a class="colorpick-btn" style="background-color:#c2c2c2;" data-color="#c2c2c2"></a></li><li><a class="colorpick-btn" style="background-color:#cabdbf;" data-color="#cabdbf"></a></li><li><a class="colorpick-btn" style="background-color:#cca6ac;" data-color="#cca6ac"></a></li><li><a class="colorpick-btn" style="background-color:#f691b2;" data-color="#f691b2"></a></li><li><a class="colorpick-btn" style="background-color:#cd74e6;" data-color="#cd74e6"></a></li><li><a class="colorpick-btn" style="background-color:#a47ae2;" data-color="#a47ae2"></a></li><li><a class="colorpick-btn" style="background-color:#444444;" data-color="#444444"></a></li></ul></div>  <input style="display:none;" disabled="" class="hide" data-edit="foreColor" type="text">  </div> <div class="btn-group">  <a class="btn btn-sm btn-grey" data-edit="undo" title="" data-original-title="Undo (Ctrl/Cmd+Z)"><i class=" ace-icon fa fa-undo"></i></a>  <a class="btn btn-sm btn-grey" data-edit="redo" title="" data-original-title="Redo (Ctrl/Cmd+Y)"><i class=" ace-icon fa fa-repeat"></i></a>  </div>  </div>
                           <div class="wysiwyg-editor" id="editor1" contenteditable="true"></div> 
                    </div>




                   </div> 
                </form>
             </div>
              
            <div class="modal-footer">
                <button class="btn btn-sm" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Cancel
                </button>
                         
                <button class="btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-check"></i>
                    Save
                </button>
            </div>
            
        </div>
    </div>
</div>


 <!-- GOM POM /-->
        <style>
        .tab-pane,
        #myTabContent{
            background: #FFF;
        }
        #myTabContent{
            margin-top: -20px;
            border: 1px solid #CCC;
            border-radius: 0px 0px 4pt 4pt;
            -webkit-border-radius: 0px 0px 4pt 4pt;
            -moz-border-radius: 0px 0px 4pt 4pt;
        }
        
        .pag{
            margin:     10px;
            padding:    0px;
            list-style: none;
            
        }
        .pag li img{
            width:  100px;
            height: 100px;
            margin: 0px 0px 10px 45px;
            border: 2px solid #CCC;
        }
        .pag li{
            margin: 2px;
        }
        .pag-label{
            padding: 5px;
            background: #f4f4f4;
            font-size: 10px;
            font-family: verdana;
            -webkit-border-radius:6px;
            -moz-border-radius:6px;
            border-radius:6px;
            
        }
        
        </style>
        <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#pom" data-toggle="tab"><span class="label label-info">POM</span></a></li>
              <li><a href="#gom" data-toggle="tab"><span class="label label-important">GOM</span></a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="pom">
                <ul class="pag">
                    <li>
                        <img src="<?php echo $this->themePath('') ?>img/pom.gif" title="Player of the Month" />
                    </li>
                    <li class="pag-label"><strong>IGN:</strong> Gerome</li>
                    <li class="pag-label"><strong>Name:</strong> John Gerome Baldonado</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="gom">
                <ul class="pag">
                    <li>
                        <img src="<?php echo $this->themePath('') ?>img/gom.png" title="Player of the Month" />
                    </li>
                    <li class="pag-label"><strong>Guild:</strong> Boholano</li>
                    <li class="pag-label"><strong>GM:</strong> John Gerome Baldonado</li>
                </ul>
              </div>
        </div><!--/ GOM POM -->
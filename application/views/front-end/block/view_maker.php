<div class="modal-dialog modal-lg" data-toggle="modal" tabindex="-1" style="width: 80%;">
    <div class="modal-content">
        <div id="headerDiv" class="" style="padding: 0px;border-bottom-width: 0px;">
            <div class="alert alert-warning" id="WarningMessageAdd"></div>
            
            <div class="titleDev" style="position: absolute;top: 10px;left: 10px;margin-left: 10px; font-size: 14px">
                <?php echo !empty($data->config->deviceName)?$data->config->deviceName:''?>
            </div>
            
            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true" class="close-span">&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title label-vms" id="myModalLabelForm" style="margin-left: 10px; padding-top: 5px; font-size: 20px;visibility: hidden">Thêm mới</h4>
        </div>
        <div class="modal-body color-bgr-form" style="font-size: 12px;">
            <?php if(!empty($data)):?>
            <form action="<?php echo base_url().'Device/saveConfig'?>" method="post">
            <div class="row " style="margin-left: 0px; margin-right: 0px;">
                <div id="div-8-col" class="border-graph" style="padding-bottom: 10px">
                    <div class="row" style="margin-left: 0px !important; margin-top: 5px">
                        <div class="col-sm-12 form-horizontal">
                            <h4 class="label-vms" style="background-color: #6d6e70; margin-bottom: -5px;margin-top: 0px;width: 35%;height: 18px;font-size: 14px;">THÔNG TIN CHUNG</h4>
                            <hr style="border-top-color: #939598;">
                            <div class="form-group">
                                <label class="col-sm-1 control-label label-vms" >Tên giao lộ<font color="red"><b>*</b></font></label>
                                <div class="col-sm-5" style="width: 300px">
                                    <input id="vmsName" placeholder="Tên giao lộ" type="text" name="intersection_name" maxlength="100" value="<?php echo !@empty($data->config->name)?$data->config->name:''?>" class="form-control input-sm">
                                </div>
                                <label class="col-sm-1 control-label label-vms">Ưu tiên<font color="red"><b>*</b></font></label>
                                <div class="col-sm-3" style="width: 300px">
                                    <select id="vmsTypeOrder" name="vmsTypeOrder" class="form-control input-sm">
                                        <option value="-1">--Loại Ưu tiên--</option>
                                        <option value="0">Auto</option>
                                        <option value="1">Tuyến 1</option>
                                        <option value="2">Tuyến 2</option>
                                        <option value="3">Tuyến 3</option>
                                        <option value="4">Tuyến 4</option>
                                        <option value="5">Tuyến 5</option>
                                        <option value="6">Tuyến 6</option>
                                        <option value="7">Tuyến 7</option>
                                        <option value="8">Tuyến 8</option>
                                    </select>
                                </div>
                            </div>
                            <hr style="border-top-color: #939598;">
                        </div>
                        <div class="col-sm-12 form-horizontal">
                            <div class="form-group">
                                <div id= "vmsModel" class="col-sm-2 label-vms" style="text-align: right; padding-right: 0px; margin-left: -20px; text-align: center;">Chiến lược giờ</div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label label-vms" name="chien-luoc">Chiến lược<font color="red"><b>*</b></font></label>
                                <div class="col-sm-4" style="width: 300px">
                                    <!--<input type="text" placeholder="Chiến lược" id="vmsPort" maxlength="6" class="form-control input-sm vms-input" placeholder="">-->
                                    <select  id="chien-luoc" class="form-control input-sm" name="chien-luoc">
                                        <option value="-1">--Chọn chiến lược--</option>
                                        <option value="0">A</option>
                                        <option value="1">B</option>
                                        <option value="2">C</option>
                                        <option value="3">D</option>
                                    </select>
                                    <input type="hidden" name="config_device_stragetiesA" id="config_device_stragetiesA" value='<?php echo @!empty($data->config->mainConfig->stragetiesA)?json_encode($data->config->mainConfig->stragetiesA):''?>'/>
                                    <input type="hidden" name="config_device_stragetiesB" id="config_device_stragetiesB" value='<?php echo @!empty($data->config->mainConfig->stragetiesB)?json_encode($data->config->mainConfig->stragetiesB):''?>'/>
                                    <input type="hidden" name="config_device_stragetiesC" id="config_device_stragetiesC" value='<?php echo @!empty($data->config->mainConfig->stragetiesC)?json_encode($data->config->mainConfig->stragetiesC):''?>'/>
                                    <input type="hidden" name="config_device_stragetiesD" id="config_device_stragetiesD" value='<?php echo @!empty($data->config->mainConfig->stragetiesD)?json_encode($data->config->mainConfig->stragetiesD):''?>'/>
                                </div>
                                <label class="col-sm-1 control-label label-vms">Thời điểm<font color="red"><b>*</b></font></label>
                                <div class="col-sm-3" style="width: 300px">
                                    <!--<input type="text" placeholder="Thời điểm" id="vmsIp" maxlength="20" class="form-control input-sm vms-input" placeholder="">-->
                                    <select class="form-control input-sm" id="thoi-diem" name="thoi-diem">
                                        <option value="-1">--Chọn thời điểm--</option>
                                        <option value="0">1</option>
                                        <option value="1">2</option>
                                        <option value="2">3</option>
                                        <option value="3">4</option>
                                        <option value="4">5</option>
                                        <option value="5">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label label-vms">Txanh<font color="red"><b>*</b></font></label>
                                <?php for($i=0;$i<8;$i++):?>
                                <div class="col-sm-1" style="padding: 1px 1px 1px 15px;">
                                    <input type="text" placeholder="Thời điểm" id="vmsTx<?php echo $i?>" name="vmsTx<?php echo $i?>" maxlength="20" class="form-control input-sm vms-input vms-input-tx vms-select-input" placeholder="" value="<?php echo @!empty($data->config->mainConfig->active->tx[0])?$data->config->mainConfig->active->tx[0]:''?>">
                                </div>
                                <?php endfor;?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label label-vms">TSxanh<font color="red"><b>*</b></font></label>
                                <?php for($i=0;$i<8;$i++):?>
                                <div class="col-sm-1" style="padding: 1px 1px 1px 15px;">
                                    <input type="text" placeholder="Thời điểm" id="vmsTsx<?php echo $i?>" name="vmsTsx<?php echo $i?>" maxlength="20" class="form-control input-sm vms-input vms-input-tsx  vms-select-input" placeholder="" value="">
                                </div>
                                <?php endfor;?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label label-vms">Tdibo<font color="red"><b>*</b></font></label>
                                <?php for($i=0;$i<8;$i++):?>
                                <div class="col-sm-1" style="padding: 1px 1px 1px 15px;">
                                    <input type="text" placeholder="Thời điểm" id="vmsTdbx<?php echo $i?>" name="vmsTdbx<?php echo $i?>" maxlength="20" class="form-control input-sm vms-input vms-input-tdbx  vms-select-input" placeholder="" value="">
                                </div>
                                <?php endfor;?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label label-vms">TSdibo<font color="red"><b>*</b></font></label>
                                <?php for($i=0;$i<8;$i++):?>
                                <div class="col-sm-1" style="padding: 1px 1px 1px 15px;">
                                    <input type="text" placeholder="Thời điểm" id="vmsTsdbx<?php echo $i?>" name="vmsTsdbx<?php echo $i?>" maxlength="20" class="form-control input-sm vms-input vms-input-tsdbx  vms-select-input" placeholder="" value="">
                                </div>
                                <?php endfor;?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label label-vms">Tck<font color="red"><b>*</b></font></label>
                                <div class="col-sm-2">
                                    <input type="text" placeholder="Thời điểm" id="vmsFreq" name="vmsFreq" maxlength="20" class="form-control input-sm vms-input vms-input-tck  vms-select-input" placeholder="">
                                </div>
                                <label class="col-sm-1 control-label label-vms">Tv<font color="red"><b>*</b></font></label>
                                <div class="col-sm-2">
                                    <input type="text" placeholder="Thời điểm" id="vmsTv" name="vmsTv" maxlength="20" class="form-control input-sm vms-input vms-input-tck  vms-select-input" placeholder="">
                                </div>
                                <label class="col-sm-1 control-label label-vms">Tgt<font color="red"><b>*</b></font></label>
                                <div class="col-sm-2">
                                    <input type="text" placeholder="Chiến lược" id="vmsGt" name="vmsGt" maxlength="6" class="form-control input-sm vms-input vms-input-tgt  vms-select-input" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label label-vms">Bắt đầu<font color="red"><b>*</b></font></label>
                                <div class="col-sm-4" style="width: 300px">
<!--                                    <input type="text" placeholder="Thời điểm" id="vmsStartTime" name="vmsStartTime" maxlength="20" class="form-control input-sm vms-input vms-input-start-time  vms-select-input" placeholder="">-->
                                    <div class="ibox-content">
                                        <div class="input-group clockpicker clockpickerStartTime" data-autoclose="true">
                                            <input type="text" class="form-control" id="vmsStartTime" name="vmsStartTime" value="" class="form-control input-sm vms-input vms-input-start-time  vms-select-input" >
                                            <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <label class="col-sm-1 control-label label-vms">kết thúc<font color="red"><b>*</b></font></label>
                                <div class="col-sm-3" style="width: 300px">
<!--                                    <input type="text" placeholder="Chiến lược" id="vmsEndTime" name="vmsEndTime" maxlength="6" class="form-control input-sm vms-input vms-input-end-time vms-select-input" placeholder="">-->
                                    <div class="ibox-content">
                                        <div class="input-group clockpicker clockpickerEndTime" data-autoclose="true">
                                            <input type="text" class="form-control" id="vmsEndTime" name="vmsEndTime" value="" class="form-control input-sm vms-input vms-input-end-time  vms-select-input" >
                                            <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 form-horizontal">
                            <h4 class="label-vms" style="background-color: #6d6e70;margin-bottom: -5px;margin-top: 0px;width: 30%;height: 18px;font-size: 13px;">Chiến lược ngày</h4>
                            <hr style="border-top-color: #939598;">
                            <div class="form-group">
                                <label class="col-sm-1 control-label label-vms">
                                    T2->CN<font color="red"><b>*</b></font>
                                </label>
                                
                                <?php for($i=0;$i<7;$i++):?>
                                    <div class="col-sm-1">
                                        <select id="<?php echo 'stragetiesDay['.($i).']';?>" name="chien-luoc-ngay[<?php echo $i+2?>]" class="form-control pointer input-sm vms-input">
                                            <option value="-1">--Loại chiến lược--</option>
                                            <option value="0" <?php echo!empty($data->config->otherConfig->strageties[$i]) && $data->config->otherConfig->strageties[$i]=='A'?' selected':''?>>A</option>
                                            <option value="1"  <?php echo!empty($data->config->otherConfig->strageties[$i]) && $data->config->otherConfig->strageties[$i]=='B'?' selected':''?>>B</option>
                                            <option value="2"  <?php echo!empty($data->config->otherConfig->strageties[$i]) && $data->config->otherConfig->strageties[$i]=='C'?' selected':''?>>C</option>
                                            <option value="3"  <?php echo!empty($data->config->otherConfig->strageties[$i]) && $data->config->otherConfig->strageties[$i]=='D'?' selected':''?>>D</option>
                                        </select>
                                    </div>
                                <?php endfor;?>
                            </div>
                        </div>
                        <div class="col-sm-12 form-horizontal">
                            <h4 class="label-vms" style="background-color: #6d6e70;margin-bottom: -5px;margin-top: 0px;width: 30%;height: 18px;font-size: 13px;">Cài đặt khác</h4>
                            <hr style="border-top-color: #939598;">
                            <div class="form-group">
                                <label class="col-sm-1 control-label label-vms">OPT 1<font color="red"><b>*</b></font>
                                </label>
                                <div style="margin-left: -200px;">
                                    <?php for($i=0;$i<8;$i++):?>
                                        <div class="col-sm-1" style="padding: 1px 1px 1px 10px">
                                            <select id="<?php echo 'option1_'.$i?>" class="form-control pointer input-sm vms-input vms-input-option1" name="option1_[<?php echo $i?>]">
                                                <!--<option name="item" value="-1">--Loại OPT--</option>-->
                                                <option value="0" <?php echo !is_null($data->config->otherConfig->option1[$i])&&$data->config->otherConfig->option1[$i]==0?' selected':''?>>Xanh</option>
                                                <option value="1" <?php echo !is_null($data->config->otherConfig->option1[$i])&&$data->config->otherConfig->option1[$i]==1?' selected':''?>>Vàng</option>
                                                <option value="2" <?php echo !is_null($data->config->otherConfig->option1[$i])&&$data->config->otherConfig->option1[$i]==2?' selected':''?>>Đỏ</option>
                                                <option value="3" <?php echo !is_null($data->config->otherConfig->option1[$i])&&$data->config->otherConfig->option1[$i]==3?' selected':''?>>Chữ thập</option>
                                                <option value="4" <?php echo !is_null($data->config->otherConfig->option1[$i])&&$data->config->otherConfig->option1[$i]==4?' selected':''?>>Đi bộ xanh</option>
                                                <option value="5" <?php echo !is_null($data->config->otherConfig->option1[$i])&&$data->config->otherConfig->option1[$i]==5?' selected':''?>>Đi bộ đỏ</option>
                                            </select>
                                        </div>
                                    <?php endfor;?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label label-vms">OPT 2<font color="red"><b>*</b></font>
                                </label>
                                <div style="margin-left: -200px;">
                                    <?php for($i=0;$i<8;$i++):?>
                                        <div class="col-sm-1" style="padding: 1px 1px 1px 10px">
                                            <select id="<?php echo 'option2_'.$i;?>" class="form-control pointer input-sm vms-input vms-input-option2" name="option2_[<?php echo $i?>]">
                                                <!--<option value="-1">--Loại OPT--</option>-->
                                                <option value="0" <?php echo !is_null($data->config->otherConfig->option2[$i])&&$data->config->otherConfig->option2[$i]==0?' selected':''?>>Xanh</option>
                                                <option value="1" <?php echo !is_null($data->config->otherConfig->option2[$i])&&$data->config->otherConfig->option2[$i]==1?' selected':''?>>Vàng</option>
                                                <option value="2" <?php echo !is_null($data->config->otherConfig->option2[$i])&&$data->config->otherConfig->option2[$i]==2?' selected':''?>>Đỏ</option>
                                                <option value="3" <?php echo !is_null($data->config->otherConfig->option2[$i])&&$data->config->otherConfig->option2[$i]==3?' selected':''?>>Chữ thập</option>
                                                <option value="4" <?php echo !is_null($data->config->otherConfig->option2[$i])&&$data->config->otherConfig->option2[$i]==4?' selected':''?>>Đi bộ xanh</option>
                                                <option value="5" <?php echo !is_null($data->config->otherConfig->option2[$i])&&$data->config->otherConfig->option2[$i]==5?' selected':''?>>Đi bộ đỏ</option>
                                            </select>
                                        </div>
                                    <?php endfor;?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label label-vms">Giờ mở<font color="red"><b>*</b></font></label>
                                <div class="col-sm-2">
                                    <div class="ibox-content">
                                        <div class="input-group clockpicker clockpickerOtherStartTime" data-autoclose="true">
                                            <input type="text" class="form-control" id="otherStartTime" name="otherStartTime" value="<?php echo !is_null($data->config->otherConfig->hour_on)&&  !is_null($data->config->otherConfig->minute_on)?$data->config->otherConfig->hour_on.':'.$data->config->otherConfig->minute_on:''?>" >
                                            <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <label class="col-sm-1 control-label label-vms">Giờ tắt<font color="red"><b>*</b></font></label>
                                <div class="col-sm-2">
                                    <div class="ibox-content">
                                        <div class="input-group clockpicker clockpickerOtherEndTime" data-autoclose="true">
                                            <input type="text" class="form-control" id="otherEndTime" name="otherEndTime" value="<?php echo @!is_null($data->config->otherConfig->hour_off)&&@!is_null($data->config->otherConfig->minute_off)?$data->config->otherConfig->hour_off.':'.$data->config->otherConfig->minute_off:''?>" >
                                            <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <label class="col-sm-1 control-label label-vms">Giờ chớp<font color="red"><b>*</b></font></label>
                                <div class="col-sm-2">
<!--                                    <input type="text" placeholder="Chiến lược" id="vmsPort" name="otherBlinkTime" value="--><?php //echo @!is_null($data->config->otherConfig->hour_blink)&&@!is_null($data->config->otherConfig->minute_blink)?$data->config->otherConfig->hour_blink.':'.$data->config->otherConfig->minute_blink:''?><!--"  maxlength="6" class="form-control input-sm vms-input" placeholder="">-->
                                    <div class="ibox-content">
                                        <div class="input-group clockpicker clockpickerOtherBlinkTime" data-autoclose="true">
                                            <input type="text" class="form-control" id="otherBlinkTime" name="otherBlinkTime" value="<?php echo @!is_null($data->config->otherConfig->hour_blink)&&@!is_null($data->config->otherConfig->minute_blink)?$data->config->otherConfig->hour_blink.':'.$data->config->otherConfig->minute_blink:''?>" >
                                            <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <label class="col-sm-1 control-label label-vms" style="margin: 7px 0px 0px -25px;padding: 0px 0px 0px 0px;">Số pha<font color="red"><b>*</b></font></label>
                                <div class="col-sm-2" style="padding: 0px 79px 0px 10px;width: 152px;">
                                    <input type="text" placeholder="Chiến lược" id="otherAlpha"  name="otherAlpha" value="<?php echo @!is_null($data->config->otherConfig->so_pha)?$data->config->otherConfig->so_pha:''?>" maxlength="6" class="form-control input-sm vms-input" placeholder="" style="padding:0px !important;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id= "btnActionDiv" class="row" style="float: right; margin-right: 0px; margin-top: 20px">
                        <button type="button" id="btnStart" class="btn btn-sm btn-info m-t-n-xs" data-dismiss="">Start</button>
                        <button type="button" id="btnStop" class="btn btn-sm btn-info m-t-n-xs" data-dismiss="">Stop</button>
                        <button type="button" id="btnBlink" class="btn btn-sm btn-info m-t-n-xs m-t-n-xs"  data-dismiss="">Blink</button>
                        <button type="button" id="btnSetTime" class="btn btn-sm btn-info m-t-n-xs" data-dismiss="">Set Time</button>
                        <button type="button" id="btnUpload" class="btn btn-sm btn-info m-t-n-xs" data-dismiss="">Get Config</button>
                        <button type="button" id="btnDownload" class="btn btn-sm btn-info m-t-n-xs" data-dismiss="">Set Config</button>
                        <button type="button" id="btnCancle" class="btn btn-sm btn-danger m-t-n-xs" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
            </form>
            <?php endif;?>
        </div>
    </div>
</div>
<?php
if(!empty($data)):
?>
<script>
    (function ($) {
})(jQuery);
    $('.clockpickerOtherStartTime,.clockpickerOtherEndTime,.clockpickerOtherBlinkTime').clockpicker({
        placement: 'top',
        align: 'left',
        donetext: 'Done'
    });
    $('.clockpickerStartTime,.clockpickerEndTime').clockpicker({
        placement: 'top',
        align: 'left',
        donetext: 'Done'
    });
    $('input[id^=vmsTx],input[id^=vmsTsx],input[id^=vmsTsx],input[id^=vmsTdbx],input[id^=vmsTsdbx],#vmstv,#vmsFreq,#vmsGt,#otherAlpha').TouchSpin({
        verticalbuttons: true,
        buttondown_class: 'btn btn-white',
        buttonup_class: 'btn btn-white',
        min:0,
        max:255
    });
    var config_device_strageties_active = [];
    var tmpChienLuoc = <?php echo json_encode(mConfig('chien-luoc',JSON_PRETTY_PRINT));?>;
    $('.vms-select-input').on('input',function(){
//        $(this).validateNumber();
        var chienLuoc = $('#chien-luoc');
        var thoiDiem = $('#thoi-diem');
        var name=$(this).attr('name');
        var test = name.match(/[0-9]/);
        var _number, _name,active,config;
        if(test!=null){
            _number = test[0];
            _name=name.substring(0,name.length-1);
        }else{
            _name=name;
        }
        
        if(typeof chienLuoc !='undefined' &&chienLuoc.val()>=0 
                &&typeof thoiDiem !='undefined'  &&chienLuoc.val()>=0&& strageties.indexOf(_name)>=0
        ){
            config = $('#config_device_'+tmpChienLuoc[parseInt(chienLuoc.val())]).val();
            try{
                if(config.trim()!=''&&validateJson(config)){
                active = JSON.parse(config);
                if(_number!=null){
                    if(active[parseInt(thoiDiem.val())]==null){
                        active[parseInt(thoiDiem.val())] = chienluoconly;
                    }
                    active[parseInt(thoiDiem.val())][_name.substring(3).toLowerCase()][_number]=parseInt($(this).val());
                }else{
                    if(strageties1.hasOwnProperty(_name)){
                        var time = $(this).val().split(':');
                        if(time.length==1){
                            active[parseInt(thoiDiem.val())][strageties1[_name][1]] = parseInt(time[0]);
                            active[parseInt(thoiDiem.val())][strageties1[_name][0]] = 0;
                        }else{
                            active[parseInt(thoiDiem.val())][strageties1[_name][0]] = parseInt(time[0]);
                            active[parseInt(thoiDiem.val())][strageties1[_name][1]] = parseInt(time[1]);
                        }
                    }else{
                       active[parseInt(thoiDiem.val())][_name.substring(3).toLowerCase()]=parseInt($(this).val());
                    }
                }
                 $('#config_device_'+tmpChienLuoc[parseInt(chienLuoc.val())]).val(JSON.stringify(active)) ; 
                }else{
                    active = createArr();
                    if(_number!=null){
                        active[parseInt(thoiDiem.val())][_name.substring(3).toLowerCase()][_number]=parseInt($(this).val());
                    }else{
                        if(strageties1.hasOwnProperty(_name)){
                            var time = $(this).val().split(':');
                            if(time.length==1){
                                active[parseInt(thoiDiem.val())][strageties1[_name][1]] = parseInt(time[0]);
                                active[parseInt(thoiDiem.val())][strageties1[_name][0]] = 0;
                            }else{
                                active[parseInt(thoiDiem.val())][strageties1[_name][0]] = parseInt(time[0]);
                                active[parseInt(thoiDiem.val())][strageties1[_name][1]] = parseInt(time[1]);
                            }
                        }else{
                           active[parseInt(thoiDiem.val())][_name.substring(3).toLowerCase()]=parseInt($(this).val());
                        }
                    }
                    $('#config_device_'+tmpChienLuoc[parseInt(chienLuoc.val())]).val(JSON.stringify(active)) ; 
                }
            }catch(e){
                console.log(e);
            }
        }
        else{
                console.log('khong co du lieu2');
            }
    })
    $('#btnUpload').on('click',function(){
    var c = $(this);var chien_luoc=$('#chien-luoc'), thoi_diem=$('#thoi-diem');
    c.attr('disabled','disabled');
    $.ajax({
            url: '<?php echo base_url().'Device/downloadConfigDevice'?>',
            type: "POST",
            dataType: "Json",
            data: {deviceName:'<?php echo !@empty($data->config->deviceName)?$data->config->deviceName:''?>'},
            success: function (data) {
                c.removeAttr('disabled');
                if(data.success){
                    $('#config_device_stragetiesA').val(JSON.stringify(data.message.stragetiesA));
                    $('#config_device_stragetiesB').val(JSON.stringify(data.message.stragetiesB));
                    $('#config_device_stragetiesC').val(JSON.stringify(data.message.stragetiesC));
                    $('#config_device_stragetiesD').val(JSON.stringify(data.message.stragetiesD));
                    $('#vmsName').val(data.message.deviceName);
                    if(data.message.otherConfig!=null && data.message.otherConfig.so_pha !=null){
                        $('#otherAlpha').val(data.message.otherConfig.so_pha);
                    }else{
                        $('#otherAlpha').val(0);
                    }
                    window.setOtherConfig(data.message.otherConfig);
                    if(typeof thoi_diem !='undefined'&&parseInt(thoi_diem.val())>=0&&parseInt(thoi_diem.val())<6&&
                       typeof chien_luoc !='undefined'&&parseInt(chien_luoc.val())>=0&&parseInt(chien_luoc.val())<4){
                        var ActiveStragete = data.message[tmpChienLuoc[parseInt(chien_luoc.val())]][parseInt(thoi_diem.val())];
                        if(ActiveStragete ==null){
                            ActiveStragete = chienluoconly;
                        }
                        window.setStrageties(ActiveStragete);
                    }
                    toast('Thành công','Lệnh thực hiện thành công','success');
                }else{
                    toast('Có lỗi !',data.message,'error');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
            }
        });
    });
    
    $('#btnStart').on('click',function(){
    var c = $(this);
    c.attr('disabled','disabled');
    $.ajax({
            url: '<?php echo base_url().'Device/startDevice'?>',
            type: "POST",
            dataType: "Json",
            data: {deviceName:'<?php echo !@empty($data->config->deviceName)?$data->config->deviceName:''?>'},
            success: function (data) {
                c.removeAttr('disabled');
                if(data.success){
//                    c.parent().modal('hiden');
                    toast('Thành công','Lệnh thực hiện thành công','success');
                }else{
                    toast('Có lỗi !',data.message,'error');
                }
                
            },
            error: function (jqXHR, textStatus, errorThrown) {
            }
        });
    });
    
    $('#btnStop').on('click',function(){
    var c = $(this);
    c.attr('disabled','disabled');
    $.ajax({
            url: '<?php echo base_url().'Device/stopDevice'?>',
            type: "POST",
            dataType: "Json",
            data: {deviceName:'<?php echo !@empty($data->config->deviceName)?$data->config->deviceName:''?>'},
            success: function (data) {
                c.removeAttr('disabled');
                if(data.success){
//                    c.parent().modal('hiden');
                    toast('Thành công','Lệnh thực hiện thành công','success');
                }else{
                    toast('Có lỗi !',data.message,'error');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
            }
        });
    });
    
    $('#btnSetTime').on('click',function(){
    var c = $(this);
    c.attr('disabled','disabled');
    $.ajax({
            url: '<?php echo base_url().'Device/setTimeDevice'?>',
            type: "POST",
            dataType: "Json",
            data: {deviceName:'<?php echo !@empty($data->config->deviceName)?$data->config->deviceName:''?>'},
            success: function (data) {
                c.removeAttr('disabled');
                if(data.success){
//                    c.parent().modal('hiden');
                    toast('Thành công','Lệnh thực hiện thành công','success');
                }else{
                    toast('Có lỗi !',data.message,'error');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
            }
        });
    });
    
    $('#btnDownload').on('click',function(){
    var c = $(this);
    c.attr('disabled','disabled');
    $.ajax({
            url: '<?php echo base_url().'Device/saveConfig'?>',
            type: "POST",
            dataType: "Json",
            data: {deviceName:'<?php echo !@empty($data->config->deviceName)?$data->config->deviceName:''?>',data:$('form').serializeArray()},
            success: function (data) {
                c.removeAttr('disabled');
                if(data.success){
                    toast('Success !','Lệnh thực hiện thành công','success');
                }else{
                    toast('Có lỗi !',data.message,'error');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
            }
        });
    });
    
    $('#btnBlink').on('click',function(){
    var c = $(this);
    c.attr('disabled','disabled');
    $.ajax({
            url: '<?php echo base_url().'Device/blinkDevice'?>',
            type: "POST",
            dataType: "Json",
            data: {deviceName:'<?php echo !@empty($data->config->deviceName)?$data->config->deviceName:''?>'},
            success: function (data) {
                c.removeAttr('disabled');
                if(data.success){
//                    c.parent().modal('hiden');
                    toast('Thành công','Lệnh thực hiện thành công','success');
                }else{
                    toast('Có lỗi !',data.message,'error');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
            }
        });
    });
    
    var chien_luoc = $('#chien-luoc,#thoi-diem');
var chien_luoc =$('#chien-luoc')
var thoi_diem =$('#thoi-diem')
$('#chien-luoc,#thoi-diem').on('change',function(){
    var config_device_strageties_active = [];
    var tmpChienLuoc = <?php echo json_encode(mConfig('chien-luoc',JSON_PRETTY_PRINT));?>;
        if((parseInt(thoi_diem.val())>=0)&& parseInt(chien_luoc.val())>=0){
            try{
                var config = $('#config_device_'+tmpChienLuoc[parseInt(chien_luoc.val())]).val();
                if(config.trim()!=''&&validateJson(config)){
                    var tmp = JSON.parse(config);
                    config_device_strageties_active = tmp[parseInt(thoi_diem.val())];
                }
                else{
                    config = createArr();
                    config_device_strageties_active = config[0];
                }
                if(config_device_strageties_active==null){
                    config = createArr();
                    config_device_strageties_active = config[0];
                }
                window.setStrageties(config_device_strageties_active);
            }catch(e){
                console.log(e)
            }
        }
        else{
            var config = createArr();
            var config_device_strageties_active = config[0];
            window.setStrageties(config_device_strageties_active);
        } 
    return;
    })
    
    $('#vmsTypeOrder').on('change',function(){
        var typeOrder = parseInt($(this).val());
        if(typeOrder<0||typeOrder>8){
            alert('Chọn sai loại ưu tiên');
        }else{
            r = confirm('Bạn có chắc muốn thực hiện');
            if(r==true){
                $.ajax({
                    url: '<?php echo base_url().'Device/setOrderDevice'?>',
                    type: "POST",
                    dataType: "Json",
                    data: {deviceName:'<?php echo !@empty($data->config->deviceName)?$data->config->deviceName:''?>',orderType:typeOrder},
                    success: function (data) {
                        if(data.success){
        //                    c.parent().modal('hiden');
                            toast('Thành công','Lệnh thực hiện thành công','success');
                        }else{
                            toast('Có lỗi !',data.message,'error');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                    }
                });
            }else{
                console.log('thực hiện thất bại');
            }
        }
    });
</script>
<?php
endif;
?>
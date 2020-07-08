<?php
include("header.php");
require('connect.php');
?>
<?php
$sqltinh  = "select * from tinh";
mysqli_set_charset($conn, 'UTF8');
$resulttinh = mysqli_query($conn, $sqltinh);
$resulttinh0 = mysqli_query($conn, $sqltinh);
$resulttinh1 = mysqli_query($conn, $sqltinh);
$resulttinh2 = mysqli_query($conn, $sqltinh);
?>
<main class="main-content" style="margin-top:35px">
    <div class="container">
    <div class="col">
        <div class="row">
            <div class="col-sm-12 col-12">
                <div class="admission-title" style="background:#001373">
                    <h4><i class="fa fa-info-circle" aria-hidden="true"></i> THÔNG TIN THÍ SINH</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-8 col-12">
                <label>Họ, chữ đệm và tên của thí sinh:</label>
                <input ng-model="item.FullName" id="FullName" required="required" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" type="text" placeholder="Họ, chữ đệm và tên của thí sinh" ng-disabled="item.ProgressStep==4">
            </div>
            <div class="col-sm-6 col-md-4 col-12">
                <label>Giới tính :</label>
                <select ng-model="item.SexId" id="SexId" ng-options="sc.Id as sc.Name for (key, sc) in AllSex" class="form-control select2 ng-pristine ng-untouched ng-valid ng-empty select2-hidden-accessible" style="width: 100%;" ng-disabled="item.ProgressStep==4" tabindex="-1" aria-hidden="true"><option value="?" selected="selected"></option><option label="Nam" value="string:1">Nam</option><option label="Nữ" value="string:0">Nữ</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-SexId-container"><span class="select2-selection__rendered" id="select2-SexId-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 col-12">
                <label>Ngày/tháng/năm sinh:</label>
                <input type="text" ng-model="item.BirthDate" id="BirthDate" class="form-control datepicker ng-pristine ng-untouched ng-valid ng-empty" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" ng-disabled="item.ProgressStep==4">
            </div>
            <div class="col-sm-4 col-12">
                <label>Nơi sinh :</label>
                <select ng-model="item.BirthPlace" id="BirthPlace" ng-options="sc.CityId as sc.CityName for (key, sc) in AllCity" class="form-control select2 ng-pristine ng-untouched ng-valid ng-empty select2-hidden-accessible" style="width: 100%;" ng-disabled="item.ProgressStep==4" tabindex="-1" aria-hidden="true"><option value="?" selected="selected"></option><option label="Thành Phố Cần Thơ" value="string:55">Thành Phố Cần Thơ</option><option label="Thành phố Đà Nẵng" value="string:04">Thành phố Đà Nẵng</option><option label="Thành phố Hà Nội" value="string:01">Thành phố Hà Nội</option><option label="Thành phố Hải Phòng" value="string:03">Thành phố Hải Phòng</option><option label="Thành phố Hồ Chí Minh" value="string:02">Thành phố Hồ Chí Minh</option><option label="Tỉnh An Giang" value="string:51">Tỉnh An Giang</option><option label="Tỉnh Bà Rịa-Vũng Tàu" value="string:52">Tỉnh Bà Rịa-Vũng Tàu</option><option label="Tỉnh Bắc Giang" value="string:18">Tỉnh Bắc Giang</option><option label="Tỉnh Bắc Kạn" value="string:11">Tỉnh Bắc Kạn</option><option label="Tỉnh Bạc Liêu" value="string:60">Tỉnh Bạc Liêu</option><option label="Tỉnh Bắc Ninh" value="string:19">Tỉnh Bắc Ninh</option><option label="Tỉnh Bến Tre" value="string:56">Tỉnh Bến Tre</option><option label="Tỉnh Bình Định" value="string:37">Tỉnh Bình Định</option><option label="Tỉnh Bình Dương" value="string:44">Tỉnh Bình Dương</option><option label="Tỉnh Bình Phước" value="string:43">Tỉnh Bình Phước</option><option label="Tỉnh Bình Thuận" value="string:47">Tỉnh Bình Thuận</option><option label="Tỉnh Cà Mau" value="string:61">Tỉnh Cà Mau</option><option label="Tỉnh Cao Bằng" value="string:06">Tỉnh Cao Bằng</option><option label="Tỉnh Đắk Lắk" value="string:40">Tỉnh Đắk Lắk</option><option label="Tỉnh Đăk Nông" value="string:63">Tỉnh Đăk Nông</option><option label="Tỉnh Điện Biên" value="string:62">Tỉnh Điện Biên</option><option label="Tỉnh Đồng Nai" value="string:48">Tỉnh Đồng Nai</option><option label="Tỉnh Đồng Tháp" value="string:50">Tỉnh Đồng Tháp</option><option label="Tỉnh Gia Lai" value="string:38">Tỉnh Gia Lai</option><option label="Tỉnh Hà Giang" value="string:05">Tỉnh Hà Giang</option><option label="Tỉnh Hà Nam" value="string:24">Tỉnh Hà Nam</option><option label="Tỉnh Hà Tĩnh" value="string:30">Tỉnh Hà Tĩnh</option><option label="Tỉnh Hải Dương" value="string:21">Tỉnh Hải Dương</option><option label="Tỉnh Hậu Giang" value="string:64">Tỉnh Hậu Giang</option><option label="Tỉnh Hòa Bình" value="string:23">Tỉnh Hòa Bình</option><option label="Tỉnh Hưng Yên" value="string:22">Tỉnh Hưng Yên</option><option label="Tỉnh Khánh Hòa" value="string:41">Tỉnh Khánh Hòa</option><option label="Tỉnh Kiên Giang" value="string:54">Tỉnh Kiên Giang</option><option label="Tỉnh Kon Tum" value="string:36">Tỉnh Kon Tum</option><option label="Tỉnh Lai Châu" value="string:07">Tỉnh Lai Châu</option><option label="Tỉnh Lâm Đồng" value="string:42">Tỉnh Lâm Đồng</option><option label="Tỉnh Lạng Sơn" value="string:10">Tỉnh Lạng Sơn</option><option label="Tỉnh Lào Cai" value="string:08">Tỉnh Lào Cai</option><option label="Tỉnh Long An" value="string:49">Tỉnh Long An</option><option label="Tỉnh Nam Định" value="string:25">Tỉnh Nam Định</option><option label="Tỉnh Nghệ An" value="string:29">Tỉnh Nghệ An</option><option label="Tỉnh Ninh Bình" value="string:27">Tỉnh Ninh Bình</option><option label="Tỉnh Ninh Thuận" value="string:45">Tỉnh Ninh Thuận</option><option label="Tỉnh Phú Thọ" value="string:15">Tỉnh Phú Thọ</option><option label="Tỉnh Phú Yên" value="string:39">Tỉnh Phú Yên</option><option label="Tỉnh Quảng Bình" value="string:31">Tỉnh Quảng Bình</option><option label="Tỉnh Quảng Nam" value="string:34">Tỉnh Quảng Nam</option><option label="Tỉnh Quảng Ngãi" value="string:35">Tỉnh Quảng Ngãi</option><option label="Tỉnh Quảng Ninh" value="string:17">Tỉnh Quảng Ninh</option><option label="Tỉnh Quảng Trị" value="string:32">Tỉnh Quảng Trị</option><option label="Tỉnh Sóc Trăng" value="string:59">Tỉnh Sóc Trăng</option><option label="Tỉnh Sơn La" value="string:14">Tỉnh Sơn La</option><option label="Tỉnh Tây Ninh" value="string:46">Tỉnh Tây Ninh</option><option label="Tỉnh Thái Bình" value="string:26">Tỉnh Thái Bình</option><option label="Tỉnh Thái Nguyên" value="string:12">Tỉnh Thái Nguyên</option><option label="Tỉnh Thanh Hóa" value="string:28">Tỉnh Thanh Hóa</option><option label="Tỉnh Thừa Thiên -Huế" value="string:33">Tỉnh Thừa Thiên -Huế</option><option label="Tỉnh Tiền Giang" value="string:53">Tỉnh Tiền Giang</option><option label="Tỉnh Trà Vinh" value="string:58">Tỉnh Trà Vinh</option><option label="Tỉnh Tuyên Quang" value="string:09">Tỉnh Tuyên Quang</option><option label="Tỉnh Vĩnh Long" value="string:57">Tỉnh Vĩnh Long</option><option label="Tỉnh Vĩnh Phúc" value="string:16">Tỉnh Vĩnh Phúc</option><option label="Tỉnh Yên Bái" value="string:13">Tỉnh Yên Bái</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-BirthPlace-container"><span class="select2-selection__rendered" id="select2-BirthPlace-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
            <div class="col-sm-4 col-12">
                <label>Dân tộc :</label>
                <select ng-model="item.EnthicId" id="EnthicId" ng-options="sc.KEY as sc.TEN for (key, sc) in AllEnthics" class="form-control select2 ng-pristine ng-untouched ng-valid ng-empty select2-hidden-accessible" style="width: 100%;" ng-disabled="item.ProgressStep==4" tabindex="-1" aria-hidden="true"><option value="?" selected="selected"></option><option label="A-đham (Ê-đê)" value="string:798">A-đham (Ê-đê)</option><option label="A-la Công (Ba-na)" value="string:813">A-la Công (Ba-na)</option><option label="Ao Tá (Mường)" value="string:749">Ao Tá (Mường)</option><option label="A-rem (Chứt)" value="string:948">A-rem (Chứt)</option><option label="Ba-na" value="string:226">Ba-na</option><option label="Biat (Mnông)" value="string:852">Biat (Mnông)</option><option label="Bih (Ê-đê)" value="string:805">Bih (Ê-đê)</option><option label="Blô (Ê-đê)" value="string:802">Blô (Ê-đê)</option><option label="Bồ Khô Pạ (Phù-Lá)" value="string:930">Bồ Khô Pạ (Phù-Lá)</option><option label="Bố Y" value="string:262">Bố Y</option><option label="Bơ-nâm (Ba-na)" value="string:815">Bơ-nâm (Ba-na)</option><option label="Brao (Brâu)" value="string:972">Brao (Brâu)</option><option label="Brâu" value="string:265">Brâu</option><option label="Bri-la (Xơ đăng)" value="string:824">Bri-la (Xơ đăng)</option><option label="Bru (Bru-Vân Kiều)" value="string:860">Bru (Bru-Vân Kiều)</option><option label="Bru-Vân Kiều" value="string:236">Bru-Vân Kiều</option><option label="Bu-đâng (Mnông)" value="string:850">Bu-đâng (Mnông)</option><option label="Ca-dông (Xơ đăng)" value="string:821">Ca-dông (Xơ đăng)</option><option label="Cao (Cơ-tu)" value="string:879">Cao (Cơ-tu)</option><option label="Cao Lan (Sán chay)" value="string:827">Cao Lan (Sán chay)</option><option label="Cao Lan-Sán chỉ (Sán chay)" value="string:826">Cao Lan-Sán chỉ (Sán chay)</option><option label="Ca-tang (Cơ-tu)" value="string:882">Ca-tang (Cơ-tu)</option><option label="Ca-tang (Gié-Triêng)" value="string:891">Ca-tang (Gié-Triêng)</option><option label="Ca-tu (Cơ-tu)" value="string:878">Ca-tu (Cơ-tu)</option><option label="Chà-củi (Chứt)" value="string:953">Chà-củi (Chứt)</option><option label="Chăm" value="string:230">Chăm</option><option label="Chàm (Chăm)" value="string:837">Chàm (Chăm)</option><option label="Chăm Rê (Hrê)" value="string:844">Chăm Rê (Hrê)</option><option label="Châu Mạ (Mạ)" value="string:892">Châu Mạ (Mạ)</option><option label="Châu-ro (Chơ-ro)" value="string:909">Châu-ro (Chơ-ro)</option><option label="Chiêm Thành (Chăm)" value="string:838">Chiêm Thành (Chăm)</option><option label="Chil (Cơ-ho)" value="string:834">Chil (Cơ-ho)</option><option label="Chil (Mnông)" value="string:854">Chil (Mnông)</option><option label="Chom (Hrê)" value="string:845">Chom (Hrê)</option><option label="Chor (Gia-rai)" value="string:790">Chor (Gia-rai)</option><option label="Chơ-rai (Gia-rai)" value="string:787">Chơ-rai (Gia-rai)</option><option label="Chơ-ro" value="string:245">Chơ-ro</option><option label="Chơ-ru (Chu-ru)" value="string:922">Chơ-ru (Chu-ru)</option><option label="Chu (Chu-ru)" value="string:923">Chu (Chu-ru)</option><option label="Chủng Chá (Bố Y)" value="string:964">Chủng Chá (Bố Y)</option><option label="Chu-ru" value="string:249">Chu-ru</option><option label="Chứt" value="string:257">Chứt</option><option label="Co" value="string:243">Co</option><option label="Cơ Lao" value="string:260">Cơ Lao</option><option label="Cò Xung (La-Hủ)" value="string:939">Cò Xung (La-Hủ)</option><option label="Cóc Mùn (Dao)" value="string:783">Cóc Mùn (Dao)</option><option label="Cóc Ngáng (Dao)" value="string:782">Cóc Ngáng (Dao)</option><option label="Cơ-don (Cơ-ho)" value="string:833">Cơ-don (Cơ-ho)</option><option label="Cơ-ho" value="string:229">Cơ-ho</option><option label="Col (Co)" value="string:902">Col (Co)</option><option label="Con Kha (Thổ)" value="string:871">Con Kha (Thổ)</option><option label="Con Lan (Xơ đăng)" value="string:823">Con Lan (Xơ đăng)</option><option label="Cống" value="string:261">Cống</option><option label="ConKđe (Ba-na)" value="string:812">ConKđe (Ba-na)</option><option label="Cor (Co)" value="string:901">Cor (Co)</option><option label="Cơ-tu" value="string:239">Cơ-tu</option><option label="Cu (Khơ-me)" value="string:740">Cu (Khơ-me)</option><option label="Cù Dề Xừ (Si La)" value="string:968">Cù Dề Xừ (Si La)</option><option label="Cù Tê (La-Chi)" value="string:926">Cù Tê (La-Chi)</option><option label="Cùa (Co)" value="string:903">Cùa (Co)</option><option label="Cùi Chu (Giáy)" value="string:876">Cùi Chu (Giáy)</option><option label="Cul (Khơ-me)" value="string:739">Cul (Khơ-me)</option><option label="Cuối (Thổ)" value="string:866">Cuối (Thổ)</option><option label="Cur (Khơ-me)" value="string:738">Cur (Khơ-me)</option><option label="Đại Bản (Dao)" value="string:780">Đại Bản (Dao)</option><option label="Đản (Ngái)" value="string:793">Đản (Ngái)</option><option label="Đan Lai (Thổ)" value="string:868">Đan Lai (Thổ)</option><option label="Dẩng (Giáy)" value="string:874">Dẩng (Giáy)</option><option label="Dao" value="string:222">Dao</option><option label="Dao Đỏ (Dao)" value="string:774">Dao Đỏ (Dao)</option><option label="Dao Tiền (Dao)" value="string:777">Dao Tiền (Dao)</option><option label="Đê (Ê-đê)" value="string:796">Đê (Ê-đê)</option><option label="Đgiéh (Gié-Triêng)" value="string:883">Đgiéh (Gié-Triêng)</option><option label="ĐiPri (Mnông)" value="string:851">ĐiPri (Mnông)</option><option label="Dìu Miền (Dao)" value="string:770">Dìu Miền (Dao)</option><option label="Đliê Ruê (Ê-đê)" value="string:801">Đliê Ruê (Ê-đê)</option><option label="Động (Dao)" value="string:767">Động (Dao)</option><option label="Dơ-ro (Chơ-ro)" value="string:908">Dơ-ro (Chơ-ro)</option><option label="Ê-đê" value="string:225">Ê-đê</option><option label="E-pan (Ê-đê)" value="string:803">E-pan (Ê-đê)</option><option label="Giang (Nùng)" value="string:751">Giang (Nùng)</option><option label="Giang Rẫy Pin (Gié-Triêng)" value="string:885">Giang Rẫy Pin (Gié-Triêng)</option><option label="Gia-rai" value="string:223">Gia-rai</option><option label="Giáy" value="string:238">Giáy</option><option label="Gié-Triêng" value="string:240">Gié-Triêng</option><option label="Giơ-lâng (Ba-na)" value="string:808">Giơ-lâng (Ba-na)</option><option label="Giơ-rai (Gia-rai)" value="string:785">Giơ-rai (Gia-rai)</option><option label="Gơ-lar (Ba-na)" value="string:806">Gơ-lar (Ba-na)</option><option label="Hạ (Cơ-tu)" value="string:880">Hạ (Cơ-tu)</option><option label="Hạ (Hoa)" value="string:736">Hạ (Hoa)</option><option label="Hải Nam (Hoa)" value="string:735">Hải Nam (Hoa)</option><option label="Ha-lăng (Xơ đăng)" value="string:820">Ha-lăng (Xơ đăng)</option><option label="Hán (Hoa)" value="string:731">Hán (Hoa)</option><option label="Hà-nhì" value="string:248">Hà-nhì</option><option label="Hđang (Xơ đăng)" value="string:817">Hđang (Xơ đăng)</option><option label="Hđrung (Gia-rai)" value="string:789">Hđrung (Gia-rai)</option><option label="Hmông" value="string:221">Hmông</option><option label="Họ (Thổ)" value="string:867">Họ (Thổ)</option><option label="Hoa" value="string:217">Hoa</option><option label="Hoa (Hmông)" value="string:760">Hoa (Hmông)</option><option label="Hơ-bau (Gia-rai)" value="string:788">Hơ-bau (Gia-rai)</option><option label="Hờn Bạn (Sán chay)" value="string:829">Hờn Bạn (Sán chay)</option><option label="Hrê" value="string:232">Hrê</option><option label="Hroi (Chăm)" value="string:839">Hroi (Chăm)</option><option label="Ka Bèo (Pu Péo)" value="string:970">Ka Bèo (Pu Péo)</option><option label="Kẹo (Thổ)" value="string:864">Kẹo (Thổ)</option><option label="Khả pẻ (Si La)" value="string:969">Khả pẻ (Si La)</option><option label="Khả Quy (La-Hủ)" value="string:940">Khả Quy (La-Hủ)</option><option label="Kháng" value="string:246">Kháng</option><option label="Khánh Gia (Ngái)" value="string:794">Khánh Gia (Ngái)</option><option label="Khèn Lài (Nùng)" value="string:757">Khèn Lài (Nùng)</option><option label="Khlá Phlạo (La-Ha)" value="string:929">Khlá Phlạo (La-Ha)</option><option label="Khơ-me" value="string:218">Khơ-me</option><option label="Khơ-mú" value="string:242">Khơ-mú</option><option label="Khù Xung (La-Hủ)" value="string:938">Khù Xung (La-Hủ)</option><option label="Kiềm (Dao)" value="string:771">Kiềm (Dao)</option><option label="Kinh" value="string:214">Kinh</option><option label="Kmrâng (Xơ đăng)" value="string:822">Kmrâng (Xơ đăng)</option><option label="Kpạ (Ê-đê)" value="string:797">Kpạ (Ê-đê)</option><option label="Kpăng Công (Ba-na)" value="string:814">Kpăng Công (Ba-na)</option><option label="Krẹ Lũy (Hrê)" value="string:846">Krẹ Lũy (Hrê)</option><option label="Krem (Ba-na)" value="string:810">Krem (Ba-na)</option><option label="Krôm (Khơ-me)" value="string:744">Krôm (Khơ-me)</option><option label="Krung (Ê-đê)" value="string:799">Krung (Ê-đê)</option><option label="Ktul (Ê-đê)" value="string:800">Ktul (Ê-đê)</option><option label="La Quả (La-Chi)" value="string:927">La Quả (La-Chi)</option><option label="La-Chi" value="string:251">La-Chi</option><option label="La-Ha" value="string:252">La-Ha</option><option label="La-Hủ" value="string:254">La-Hủ</option><option label="Lan Tẻn (Dao)" value="string:779">Lan Tẻn (Dao)</option><option label="Lào" value="string:250">Lào</option><option label="Lao (La-Hủ)" value="string:936">Lao (La-Hủ)</option><option label="Lào Bốc (Lào)" value="string:924">Lào Bốc (Lào)</option><option label="Lào Nọi (Lào)" value="string:925">Lào Nọi (Lào)</option><option label="La-oang (Ra-glai)" value="string:858">La-oang (Ra-glai)</option><option label="Lat (Cơ-ho)" value="string:835">Lat (Cơ-ho)</option><option label="La-ve (Gié-Triêng)" value="string:890">La-ve (Gié-Triêng)</option><option label="Lê (Ngái)" value="string:792">Lê (Ngái)</option><option label="Lô Giang (Dao)" value="string:776">Lô Giang (Dao)</option><option label="Lô Lô" value="string:256">Lô Lô</option><option label="Lự" value="string:255">Lự</option><option label="Lừ (Lự)" value="string:941">Lừ (Lự)</option><option label="Ly Hà (Thổ)" value="string:869">Ly Hà (Thổ)</option><option label="Mạ" value="string:241">Mạ</option><option label="Mạ Krung (Mạ)" value="string:896">Mạ Krung (Mạ)</option><option label="Mạ Ngăn (Mạ)" value="string:893">Mạ Ngăn (Mạ)</option><option label="Mạ Tô (Mạ)" value="string:895">Mạ Tô (Mạ)</option><option label="Mạ Xốp (Mạ)" value="string:894">Mạ Xốp (Mạ)</option><option label="Mã-liêng (Chứt)" value="string:947">Mã-liêng (Chứt)</option><option label="Mán (Dao)" value="string:766">Mán (Dao)</option><option label="Mán Cao Lan (Sán chay)" value="string:828">Mán Cao Lan (Sán chay)</option><option label="Mán Quần Cộc (Sán Dìu)" value="string:843">Mán Quần Cộc (Sán Dìu)</option><option label="Màn Thanh (Thái)" value="string:728">Màn Thanh (Thái)</option><option label="Mán Trắng (Hmông)" value="string:765">Mán Trắng (Hmông)</option><option label="Mảng" value="string:258">Mảng</option><option label="Măng Coong (Bru-Vân Kiều)" value="string:862">Măng Coong (Bru-Vân Kiều)</option><option label="Mấng Nhé (Cống)" value="string:962">Mấng Nhé (Cống)</option><option label="Mảng Ư (Mảng)" value="string:957">Mảng Ư (Mảng)</option><option label="May (Chứt)" value="string:945">May (Chứt)</option><option label="Mđhur (Ê-đê)" value="string:804">Mđhur (Ê-đê)</option><option label="Mèo (Hmông)" value="string:758">Mèo (Hmông)</option><option label="Mẹo (Hmông)" value="string:759">Mẹo (Hmông)</option><option label="Mèo Đen (Hmông)" value="string:763">Mèo Đen (Hmông)</option><option label="Mèo Đỏ (Hmông)" value="string:762">Mèo Đỏ (Hmông)</option><option label="Mèo Xanh (Hmông)" value="string:761">Mèo Xanh (Hmông)</option><option label="Miền (Dao)" value="string:772">Miền (Dao)</option><option label="Mnông" value="string:233">Mnông</option><option label="Mọi (Mường)" value="string:747">Mọi (Mường)</option><option label="Mọi Bi (Mường)" value="string:748">Mọi Bi (Mường)</option><option label="Mol (Mường)" value="string:745">Mol (Mường)</option><option label="Mọn (Thổ)" value="string:865">Mọn (Thổ)</option><option label="Mơ-nâm (Xơ đăng)" value="string:819">Mơ-nâm (Xơ đăng)</option><option label="Mu Di (Phù-Lá)" value="string:931">Mu Di (Phù-Lá)</option><option label="Mual (Mường)" value="string:746">Mual (Mường)</option><option label="Mun Di (Lự)" value="string:943">Mun Di (Lự)</option><option label="Mứn Xen (Khơ-mú)" value="string:898">Mứn Xen (Khơ-mú)</option><option label="Mường" value="string:219">Mường</option><option label="Ná Mẻo (Hmông)" value="string:764">Ná Mẻo (Hmông)</option><option label="Ngái" value="string:224">Ngái</option><option label="Ngạn (Tày)" value="string:721">Ngạn (Tày)</option><option label="Người nước ngoài" value="string:268">Người nước ngoài</option><option label="Nguồn" value="string:367">Nguồn</option><option label="Nhắng (Giáy)" value="string:873">Nhắng (Giáy)</option><option label="Nhuồn Duôn (Lự)" value="string:942">Nhuồn Duôn (Lự)</option><option label="Noang (Ra-glai)" value="string:857">Noang (Ra-glai)</option><option label="Nông (Mnông)" value="string:848">Nông (Mnông)</option><option label="Nốp (Cơ-ho)" value="string:832">Nốp (Cơ-ho)</option><option label="Nùng" value="string:220">Nùng</option><option label="Nùng An (Nùng)" value="string:752">Nùng An (Nùng)</option><option label="Nùng Cháo (Nùng)" value="string:754">Nùng Cháo (Nùng)</option><option label="Nùng Lòi (Nùng)" value="string:755">Nùng Lòi (Nùng)</option><option label="Ơ đu" value="string:266">Ơ đu</option><option label="Pa Dí (Tày)" value="string:723">Pa Dí (Tày)</option><option label="Pà Hưng (Pà-thẻn)" value="string:959">Pà Hưng (Pà-thẻn)</option><option label="Pạ Xá (Phù-Lá)" value="string:932">Pạ Xá (Phù-Lá)</option><option label="Pa-co (Ta-ôi)" value="string:906">Pa-co (Ta-ôi)</option><option label="Pa-hi (Ta-ôi)" value="string:907">Pa-hi (Ta-ôi)</option><option label="Pa-leng (Chứt)" value="string:950">Pa-leng (Chứt)</option><option label="Pà-thẻn" value="string:259">Pà-thẻn</option><option label="Pầu Thìn Pu Nà (Giáy)" value="string:875">Pầu Thìn Pu Nà (Giáy)</option><option label="Pen Ti Lô Lô (Pu Péo)" value="string:971">Pen Ti Lô Lô (Pu Péo)</option><option label="Phàn Sinh (Nùng)" value="string:753">Phàn Sinh (Nùng)</option><option label="Phó (Phù-Lá)" value="string:933">Phó (Phù-Lá)</option><option label="Phổ (Phù-Lá)" value="string:934">Phổ (Phù-Lá)</option><option label="Phúc Kiến (Hoa)" value="string:733">Phúc Kiến (Hoa)</option><option label="Phù-Lá" value="string:253">Phù-Lá</option><option label="Phương (Cơ-tu)" value="string:881">Phương (Cơ-tu)</option><option label="Pi Thay (Thái)" value="string:729">Pi Thay (Thái)</option><option label="Pnông (Mnông)" value="string:847">Pnông (Mnông)</option><option label="Pré (Mnông)" value="string:849">Pré (Mnông)</option><option label="Pu Đang (La-Hủ)" value="string:937">Pu Đang (La-Hủ)</option><option label="Pu Péo" value="string:264">Pu Péo</option><option label="Pu Thênh Tềnh (Khơ-mú)" value="string:899">Pu Thênh Tềnh (Khơ-mú)</option><option label="Pụa (Xinh-mun)" value="string:919">Pụa (Xinh-mun)</option><option label="Puộc (Xinh-mun)" value="string:918">Puộc (Xinh-mun)</option><option label="Quần Chẹt (Dao)" value="string:775">Quần Chẹt (Dao)</option><option label="Quần Trắng (Dao)" value="string:773">Quần Trắng (Dao)</option><option label="Quảng Đông (Hoa)" value="string:734">Quảng Đông (Hoa)</option><option label="Quảng Lâm (Kháng)" value="string:917">Quảng Lâm (Kháng)</option><option label="Quý Rim (Nùng)" value="string:756">Quý Rim (Nùng)</option><option label="Ra-clây (Ra-glai)" value="string:855">Ra-clây (Ra-glai)</option><option label="Ra-đê (Ê-đê)" value="string:795">Ra-đê (Ê-đê)</option><option label="Ra-glai" value="string:234">Ra-glai</option><option label="Rai (Ra-glai)" value="string:856">Rai (Ra-glai)</option><option label="Roh (Ba-na)" value="string:811">Roh (Ba-na)</option><option label="Rơ-lam (Mnông)" value="string:853">Rơ-lam (Mnông)</option><option label="Rơ-năm" value="string:267">Rơ-năm</option><option label="Rơ-ngao (Ba-na)" value="string:809">Rơ-ngao (Ba-na)</option><option label="Rục (Chứt)" value="string:946">Rục (Chứt)</option><option label="Sách (Chứt)" value="string:944">Sách (Chứt)</option><option label="Sán chay" value="string:228">Sán chay</option><option label="Sán Chỉ (Sán chay)" value="string:830">Sán Chỉ (Sán chay)</option><option label="Sán Dẻo (Sán Dìu)" value="string:840">Sán Dẻo (Sán Dìu)</option><option label="Sán Dìu" value="string:231">Sán Dìu</option><option label="Si La" value="string:263">Si La</option><option label="Sơn Đầu (Dao)" value="string:784">Sơn Đầu (Dao)</option><option label="Tắc-củi (Chứt)" value="string:954">Tắc-củi (Chứt)</option><option label="Tang (Xơ đăng)" value="string:825">Tang (Xơ đăng)</option><option label="Ta-ôi" value="string:244">Ta-ôi</option><option label="Tareh (Gié-Triêng)" value="string:884">Tareh (Gié-Triêng)</option><option label="Ta-riêng (Gié-Triêng)" value="string:888">Ta-riêng (Gié-Triêng)</option><option label="Tày" value="string:215">Tày</option><option label="Tày (Thái)" value="string:724">Tày (Thái)</option><option label="Tày Dăm (Thái)" value="string:726">Tày Dăm (Thái)</option><option label="Tày Hạt (Ơ đu)" value="string:973">Tày Hạt (Ơ đu)</option><option label="Tày Hay (Khơ-mú)1" value="string:900">Tày Hay (Khơ-mú)1</option><option label="Tày khao (Thái)" value="string:725">Tày khao (Thái)</option><option label="Tày Mười Tây Thanh (Thái)" value="string:727">Tày Mười Tây Thanh (Thái)</option><option label="Tày Pọng (Thổ)" value="string:870">Tày Pọng (Thổ)</option><option label="Thái" value="string:216">Thái</option><option label="Thanh Y (Dao)" value="string:778">Thanh Y (Dao)</option><option label="Thổ" value="string:237">Thổ</option><option label="Thổ (Khơ-me)" value="string:741">Thổ (Khơ-me)</option><option label="Thổ (Tày)" value="string:720">Thổ (Tày)</option><option label="Thổ Đà Bắc (Thái)" value="string:730">Thổ Đà Bắc (Thái)</option><option label="Thù Lao (Tày)" value="string:722">Thù Lao (Tày)</option><option label="Tiểu Bản (Dao)" value="string:781">Tiểu Bản (Dao)</option><option label="Tơ-buăn (Gia-rai)" value="string:786">Tơ-buăn (Gia-rai)</option><option label="Tơ-đra (Xơ đăng)" value="string:818">Tơ-đra (Xơ đăng)</option><option label="Tơ-hung (Chứt)" value="string:952">Tơ-hung (Chứt)</option><option label="Tôi-ôi (Ta-ôi)" value="string:905">Tôi-ôi (Ta-ôi)</option><option label="Tơ-lô (Ba-na)" value="string:807">Tơ-lô (Ba-na)</option><option label="Tống (Pà-thẻn)" value="string:960">Tống (Pà-thẻn)</option><option label="Trại (Dao)" value="string:768">Trại (Dao)</option><option label="Trại (Sán Dìu)" value="string:841">Trại (Sán Dìu)</option><option label="Trại Đất (Sán Dìu)" value="string:842">Trại Đất (Sán Dìu)</option><option label="Trầu (Co)" value="string:904">Trầu (Co)</option><option label="Treng (Gié-Triêng)" value="string:887">Treng (Gié-Triêng)</option><option label="Tri Khùa (Bru-Vân Kiều)" value="string:863">Tri Khùa (Bru-Vân Kiều)</option><option label="Triêng (Gié-Triêng)" value="string:886">Triêng (Gié-Triêng)</option><option label="Triều Châu (Hoa)" value="string:732">Triều Châu (Hoa)</option><option label="Trinh (Cơ-ho)" value="string:836">Trinh (Cơ-ho)</option><option label="Trọng Gia (Bố Y)" value="string:965">Trọng Gia (Bố Y)</option><option label="Tu Dí (Bố Y)" value="string:966">Tu Dí (Bố Y)</option><option label="Tu Dìn (Bố Y)" value="string:967">Tu Dìn (Bố Y)</option><option label="Tu vang (Chứt)" value="string:949">Tu vang (Chứt)</option><option label="U Ni (Hà-nhì)" value="string:920">U Ni (Hà-nhì)</option><option label="U-mo (Chứt)" value="string:955">U-mo (Chứt)</option><option label="Vân Kiều (Bru-Vân Kiều)" value="string:861">Vân Kiều (Bru-Vân Kiều)</option><option label="VaXơ (Phù-Lá)" value="string:935">VaXơ (Phù-Lá)</option><option label="Ve (Gié-Triêng)" value="string:889">Ve (Gié-Triêng)</option><option label="Việt gốc Miên (Khơ-me)" value="string:742">Việt gốc Miên (Khơ-me)</option><option label="Xá (Dao)" value="string:769">Xá (Dao)</option><option label="Xa (Giáy)" value="string:877">Xa (Giáy)</option><option label="Xá Ái (Kháng)" value="string:915">Xá Ái (Kháng)</option><option label="Xá Bung (Kháng)" value="string:916">Xá Bung (Kháng)</option><option label="Xá Cẩu (Khơ-mú)" value="string:897">Xá Cẩu (Khơ-mú)</option><option label="Xá Dẩng (Kháng)" value="string:913">Xá Dẩng (Kháng)</option><option label="Xá Dón (Kháng)" value="string:912">Xá Dón (Kháng)</option><option label="Xá Hốc (Kháng)" value="string:914">Xá Hốc (Kháng)</option><option label="Xá Khao (Kháng)" value="string:910">Xá Khao (Kháng)</option><option label="Xá Khao (La-Ha)" value="string:928">Xá Khao (La-Ha)</option><option label="Xá Lá Vàng (Chứt)" value="string:956">Xá Lá Vàng (Chứt)</option><option label="Xá Lá Vàng (Mảng)" value="string:958">Xá Lá Vàng (Mảng)</option><option label="Xá Lá Vàng (Thổ)" value="string:872">Xá Lá Vàng (Thổ)</option><option label="Xạ Phạng (Hoa)" value="string:737">Xạ Phạng (Hoa)</option><option label="Xá Súa (Kháng)" value="string:911">Xá Súa (Kháng)</option><option label="Xá U Ni (Hà-nhì)" value="string:921">Xá U Ni (Hà-nhì)</option><option label="Xá Xeng (Cống)" value="string:963">Xá Xeng (Cống)</option><option label="Xa-điêng (Xtiêng)" value="string:859">Xa-điêng (Xtiêng)</option><option label="Xắm Khống (Cống)" value="string:961">Xắm Khống (Cống)</option><option label="Xín (Ngái)" value="string:791">Xín (Ngái)</option><option label="Xinh-mun" value="string:247">Xinh-mun</option><option label="Xơ đăng" value="string:227">Xơ đăng</option><option label="Xơ-lang (Chứt)" value="string:951">Xơ-lang (Chứt)</option><option label="Xơ-teng (Xơ đăng)" value="string:816">Xơ-teng (Xơ đăng)</option><option label="Xrê (Cơ-ho)" value="string:831">Xrê (Cơ-ho)</option><option label="Xtiêng" value="string:235">Xtiêng</option><option label="Xuồng (Nùng)" value="string:750">Xuồng (Nùng)</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-EnthicId-container"><span class="select2-selection__rendered" id="select2-EnthicId-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 col-12">
                <label>Chứng minh thư nhân dân:</label>
                <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="item.CitizenId" id="CitizenId" placeholder="Số chứng minh nhân dân hoặc căn cước công dân" ng-disabled="item.ProgressStep==4">
            </div>
            <div class="col-sm-4 col-12">
                <label>Ngày cấp :</label>
                <input type="text" ng-model="item.CitizenIdIssueDate" id="CitizenIdIssueDate" class="form-control datepicker ng-pristine ng-untouched ng-valid ng-empty" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" ng-disabled="item.ProgressStep==4">
            </div>
            <div class="col-sm-4 col-12">
                <label>Nơi cấp :<small>(ghi theo cmnd/cccd)</small></label>
                <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="item.CitizenIdIssuePlace" id="CitizenIdIssuePlace" ng-disabled="item.ProgressStep==4">
            </div>
        </div>
        <!--Hộ khẩu thường trú-->
        <div class="row">
            <div class="col-md-12">
                <div style="border-bottom:1px solid #AAA;padding-top:20px">
                    <label>Hộ khẩu thường trú</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12">
                <label>Tỉnh/TP :</label>
                <select name="tinh" id="tinh" class="form-control" onchange = "this.form.submit();">
                <option value=""></option>
                <?php
                if (mysqli_num_rows($resulttinh) > 0) {
                while ($rowtinh = mysqli_fetch_assoc($resulttinh)) {
                    echo '<option value="' . $rowtinh['MaNganh'] . '" ><a href="#">' . $rowtinh['tentinh'] . '</a></option>';
                }
                }
                ?> 
                </select>            
        </div>
            <div class="col-sm-4 col-12">
                <label>Quận/huyện:</label>
                <select ng-model="item.DistrictId" id="DistrictId" ng-options="sc.DistrictId as sc.DistrictName for (key, sc) in AllDistrict" class="form-control select2 ng-pristine ng-untouched ng-valid ng-empty select2-hidden-accessible" style="width: 100%;" ng-disabled="item.ProgressStep==4" tabindex="-1" aria-hidden="true"><option value="?" selected="selected"></option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DistrictId-container"><span class="select2-selection__rendered" id="select2-DistrictId-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
            <div class="col-sm-4 col-12">
                <label>Xã/phường :</label>
                <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="item.CommunName" id="CommunName" ng-disabled="item.ProgressStep==4">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-12">
                <label>Thôn/bản/đường phố :</label>
                <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="item.Address" id="Address" ng-disabled="item.ProgressStep==4">
            </div>
        </div>

        <!--Nơi học lớp 10 THPT-->
        <div class="row">
            <div class="col-md-12">
                <div style="border-bottom:1px solid #AAA;padding-top:20px">
                    <label>Nơi học lớp 10 THPT </label><span style="font-size:13px">(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành phố) và ghi mã tỉnh, mã trường)</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12">
                <label>Tỉnh/TP :</label>
                <select name="tinh" id="tinh" class="form-control" onchange = "this.form.submit();">
                <option value=""></option>
                <?php
                if (mysqli_num_rows($resulttinh0) > 0) {
                while ($rowtinh = mysqli_fetch_assoc($resulttinh0)) {
                    echo '<option value="' . $rowtinh['MaNganh'] . '" ><a href="#">' . $rowtinh['tentinh'] . '</a></option>';
                }
                }
                ?> 
                </select> 
            </div>
            <div class="col-sm-4 col-12">
                <label>Quận/huyện:</label>
                <select ng-model="item.District10Id" id="District10Id" ng-options="sc.DistrictId as sc.DistrictName for (key, sc) in AllDistrict10" ng-change="District10Change(item.City10Id,item.District10Id)" class="form-control select2 ng-pristine ng-untouched ng-valid ng-empty select2-hidden-accessible" style="width: 100%;" ng-disabled="item.ProgressStep==4" tabindex="-1" aria-hidden="true"><option value="?" selected="selected"></option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-District10Id-container"><span class="select2-selection__rendered" id="select2-District10Id-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
            <div class="col-sm-4 col-12">
                <label>Trường THPT :</label>
                <select ng-model="item.School10Code" id="School10Code" ng-options="sc.SchoolCode as sc.SchoolName for (key, sc) in AllSchool10" ng-change="CheckSchool()" class="form-control select2 ng-pristine ng-untouched ng-valid ng-empty select2-hidden-accessible" style="width: 100%;" ng-disabled="item.ProgressStep==4" tabindex="-1" aria-hidden="true"><option value="?" selected="selected"></option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-School10Code-container"><span class="select2-selection__rendered" id="select2-School10Code-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
        </div>

        <!--Nơi học lớp 11 THPT-->
        <div class="row">
            <div class="col-md-12">
                <div style="border-bottom:1px solid #AAA;padding-top:20px">
                    <label>Nơi học lớp 11 THPT </label><span style="font-size:13px">(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành phố) và ghi mã tỉnh, mã trường)</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12">
                <label>Tỉnh/TP :</label>
                <select name="tinh" id="tinh" class="form-control" onchange = "this.form.submit();">
                <option value=""></option>
                <?php
                if (mysqli_num_rows($resulttinh1) > 0) {
                while ($rowtinh = mysqli_fetch_assoc($resulttinh1)) {
                    echo '<option value="' . $rowtinh['MaNganh'] . '" ><a href="#">' . $rowtinh['tentinh'] . '</a></option>';
                }
                }
                ?> 
                </select>    
            </div>
            <div class="col-sm-4 col-12">
                <label>Quận/huyện:</label>
                <select ng-model="item.District11Id" id="District11Id" ng-options="sc.DistrictId as sc.DistrictName for (key, sc) in AllDistrict11" ng-change="District11Change(item.City11Id,item.District11Id)" class="form-control select2 ng-pristine ng-untouched ng-valid ng-empty select2-hidden-accessible" style="width: 100%;" ng-disabled="item.ProgressStep==4" tabindex="-1" aria-hidden="true"><option value="?" selected="selected"></option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-District11Id-container"><span class="select2-selection__rendered" id="select2-District11Id-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
            <div class="col-sm-4 col-12">
                <label>Trường THPT :</label>
                <select ng-model="item.School11Code" id="School11Code" ng-options="sc.SchoolCode as sc.SchoolName for (key, sc) in AllSchool11" ng-change="CheckSchool()" class="form-control select2 ng-pristine ng-untouched ng-valid ng-empty select2-hidden-accessible" style="width: 100%;" ng-disabled="item.ProgressStep==4" tabindex="-1" aria-hidden="true"><option value="?" selected="selected"></option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-School11Code-container"><span class="select2-selection__rendered" id="select2-School11Code-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
        </div>

        <!--Nơi học lớp 12 THPT-->
        <div class="row">
            <div class="col-md-12">
                <div style="border-bottom:1px solid #AAA;padding-top:20px">
                    <label>Nơi học lớp 12 THPT </label><span style="font-size:13px">(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành phố) và ghi mã tỉnh, mã trường)</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12">
                <label>Tỉnh/TP :</label>
                <select name="tinh" id="tinh" class="form-control" onchange = "this.form.submit();">
                <option value=""></option>
                <?php
                if (mysqli_num_rows($resulttinh2) > 0) {
                while ($rowtinh = mysqli_fetch_assoc($resulttinh2)) {
                    echo '<option value="' . $rowtinh['MaNganh'] . '" ><a href="#">' . $rowtinh['tentinh'] . '</a></option>';
                }
                }
                ?> 
                </select>    
            </div>
            <div class="col-sm-4 col-12">
                <label>Quận/huyện:</label>
                <select ng-model="item.District12Id" id="District12Id" ng-options="sc.DistrictId as sc.DistrictName for (key, sc) in AllDistrict12" ng-change="District12Change(item.City12Id,item.District12Id)" class="form-control select2 ng-pristine ng-untouched ng-valid ng-empty select2-hidden-accessible" style="width: 100%;" ng-disabled="item.ProgressStep==4" tabindex="-1" aria-hidden="true"><option value="?" selected="selected"></option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-District12Id-container"><span class="select2-selection__rendered" id="select2-District12Id-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
            <div class="col-sm-4 col-12">
                <label>Trường THPT :</label>
                <select ng-model="item.School12Code" id="School12Code" ng-options="sc.SchoolCode as sc.SchoolName for (key, sc) in AllSchool12" ng-change="CheckSchool()" class="form-control select2 ng-pristine ng-untouched ng-valid ng-empty select2-hidden-accessible" style="width: 100%;" ng-disabled="item.ProgressStep==4" tabindex="-1" aria-hidden="true"><option value="?" selected="selected"></option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-School12Code-container"><span class="select2-selection__rendered" id="select2-School12Code-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
        </div>
        <!--Thông tin liên hệ-->
        <div class="row">
            <div class="col-sm-6 col-12">
                <label>Điện thoại liên lạc :</label>
                <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="item.Mobile" id="Mobile" placeholder="Điện thoại liên lạc" ng-disabled="item.ProgressStep==4">
            </div>
            <div class="col-sm-6 col-12">
                <label>Email:</label>
                <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="item.Email" id="Email" placeholder="Email" ng-disabled="item.ProgressStep==4">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-12">
                <label>Địa chỉ liên hệ :</label>
                <input type="text" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="item.ContactAddress" id="ContactAddress" placeholder="Địa chỉ liên hệ" required="" ng-disabled="item.ProgressStep==4">
            </div>
        </div>

        <div class="row" style="padding-bottom:30px">
            <div class="col-sm-4 col-12">
                <label>Năm tốt nghiệp :</label>
                <input type="number" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="item.GraduateYear" id="GraduateYear" placeholder="Năm tốt nghiệp" required="" ng-disabled="item.ProgressStep==4">
            </div>
            <div class="col-sm-4 col-12">
                <label>Khu vực ưu tiên:</label>
                <select ng-model="item.PriorityAreaId" id="PriorityAreaId" ng-options="sc.PriorityAreaName as sc.PriorityAreaName for (key, sc) in AllPriorityArea" class="form-control ng-pristine ng-untouched ng-valid ng-empty" style="width: 100%;" ng-disabled="item.ProgressStep==4"><option value="?" selected="selected"></option><option label="KV1" value="string:KV1">KV1</option><option label="KV2" value="string:KV2">KV2</option><option label="KV2-NT" value="string:KV2-NT">KV2-NT</option><option label="KV3" value="string:KV3">KV3</option></select>
            </div>
            <div class="col-sm-4 col-12">
                <label>Đối tượng ưu tiên (nếu có):</label>
                <select ng-model="item.PriorityObjectId" ng-options="sc.PriorityObjectName as sc.PriorityObjectName for (key, sc) in AllPriorityObject" class="form-control ng-pristine ng-untouched ng-valid ng-empty" style="width: 100%;" ng-disabled="item.ProgressStep==4"><option value="" class="" selected="selected">Đối tượng ưu tiên</option><option label="01" value="string:01">01</option><option label="02" value="string:02">02</option><option label="03" value="string:03">03</option><option label="04" value="string:04">04</option><option label="05" value="string:05">05</option><option label="06" value="string:06">06</option><option label="07" value="string:07">07</option></select>
            </div>
        </div>

        <div class="row" style="padding-bottom:30px">
            <div class="col-sm-12 col-12 pull-right">
                <div class="col-12 text-red" style="padding-bottom:20px">
                    Lưu ý: Mỗi CMTND chỉ được lưu 1 lần, vui lòng kiểm tra kỹ các thông tin trước khi đăng ký.
                </div>
                <div class="col-sm-2 col-12">
                    <button type="button" ng-click="SaveCandidate()" ng-disabled="item.ProgressStep==4" class="btn btn-block btn-primary btn-lg" style="width:135px;height:40px;font-size:17px;text-transform:uppercase;color:#fff">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i> Tiếp tục
                    </button>
                </div>

            </div>
        </div>
    </div>
    </div>
</main>
<?php
include("footer.php")
?>
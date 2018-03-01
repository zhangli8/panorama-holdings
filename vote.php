<?php
session_start();
if(!isset($_SESSION['views'])){
    header("location:/form/validation.html");
}; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2018长江商学院美国暑期亲子游学报名表</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/moment-with-locales.min.js"></script>
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <form role="form" id="myform">
		<div class="title">
			<img class="img-responsive" src="images/timg.png" alt="2018长江商学院美国暑期亲子游学报名表">
        </div>
        <input type="hidden" class="xueyuan-number" name="num" value="1">
        <div class="xueyuanxinxi">
            <h3 class="text-center">学员个人信息</h3>
            <div must class="form-group">
                <label>孩子中文姓名</label>
                <input type="text" class="form-control" name="name1" placeholder="请输入孩子中文姓名">
            </div>
            <div class="form-group">
                <label>孩子性别</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="sex1" value="男" checked> 男
                    </label>
                    <label>
                        <input type="radio" name="sex1" value="女"> 女
                    </label>
                </div>
            </div>
            <div must class="form-group">
                <label>护照英文姓名拼音</label>
                <input type="text" class="form-control" name="e_name1" placeholder="请输入护照英文姓名拼音">
            </div>
            <div must class="form-group">  
                <label>出生日期</label>  
                <div class="input-group date">  
                    <input type="text" name="birthday1" class="form-control">
                    <span class="input-group-addon">  
                        <i class="glyphicon glyphicon-calendar"></i>  
                    </span>  
                </div>  
            </div>
            <div must class="form-group">
                <label>护照号码</label>
                <input type="text" class="form-control" name="passport1" placeholder="请输入护照号码">
            </div>
            <div must class="form-group">
                <label>国籍</label>
                <input type="text"  name="nationality1" class="form-control" placeholder="请输入国籍">
            </div>
            <div must class="form-group">
                <label>是否有对食物过敏?</label>
                <div class="fill">
                    <label>
                        <input type="radio" name="is_food1" value="是"> 是
                    </label>
                    <label>
                        <input type="radio" name="is_food1" value="否" checked> 否
                    </label>
                    <input style="display:none" type="text" name="food_name1" class="form-control text" placeholder="请输入过敏食物">
                </div>
            </div>
            <div must class="form-group">
                <label>是否有对药物过敏?</label>
                <div class="fill">
                    <label>
                        <input type="radio" name="is_medicine1" value="是"> 是
                    </label>
                    <label>
                        <input type="radio" name="is_medicine1" value="否" checked> 否
                    </label>
                    <input style="display:none" type="text" class="form-control text" name="medicine_name1" placeholder="请输入过敏药物">
                </div>
            </div>
            <div must class="form-group">
                <label>是否有个人特殊要求?</label>
                <div class="fill">
                    <label>
                        <input type="radio" name="is_require1" value="是"> 是
                    </label>
                    <label>
                        <input type="radio" name="is_require1" value="否" checked> 否
                    </label>
                    <input style="display:none" type="text" name="require_name1" class="form-control text" placeholder="请输入个人特殊要求">
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-lg add-xueyuan">增加学员</button>

        <h3 class="text-center">家长/监护人个人信息</h3>

        <div must class="form-group">
            <label>家长中文姓名(监护人)</label>
            <input type="text" name="p_name" class="form-control" placeholder="请输入家长中文姓名">
        </div>
        <div must class="form-group">
            <label>家长(监护人)护照英文姓名拼音</label>
            <input type="text" name="p_e_name" class="form-control" placeholder="请输入家长护照英文姓名拼音">
        </div>
        <div must class="form-group">  
            <label>出生日期</label>  
            <div class="input-group date">  
                <input name="P_birthday" type="text" class="form-control">
                <span class="input-group-addon">  
                    <i class="glyphicon glyphicon-calendar"></i>  
                </span>  
            </div>  
        </div>
        <div must class="form-group">
            <label>关系</label>
            <input type="text" name="relation" class="form-control" placeholder="请输入关系">
        </div>
        <div must class="form-group">
            <label>国籍</label>
            <input type="text" name="p_nationality" class="form-control" placeholder="请输入国籍">
        </div>
        <div must class="form-group">
            <label>护照号码</label>
            <input type="text" name="p_port_num" class="form-control" placeholder="请输入护照号码">
        </div>
        <div must class="form-group">
            <label>联系电话</label>
            <input type="text" class="form-control" name="P_phone" placeholder="请输入联系电话">
        </div>
        <div class="form-group">
            <label>是否有移民需求?</label>
            <div class="radio">
                <label>
                    <input type="radio" name="is_migrate" value="是"> 是
                </label>
                <label>
                    <input type="radio" name="is_migrate" value="否" checked> 否
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>孩子将来是否有赴美教育规划?</label>
            <div class="radio">
                <label>
                    <input type="radio" name="is_abroad" value="是"> 是
                </label>
                <label>
                    <input type="radio" name="is_abroad" value="否" checked> 否
                </label>
            </div>
        </div>
        <div must class="form-group">
            <label>电子邮件</label>
            <input type="text" class="form-control" name="p_email" placeholder="请输入电子邮件">
        </div>
        <div must class="form-group">
            <label>地址</label>
            <input type="text" class="form-control" name="p_address"  placeholder="请输入地址">
        </div>
        <div must class="form-group">
            <label>邮政编码</label>
            <input type="text" class="form-control" name="post_code" placeholder="请输入邮政编码">
        </div>

        <h3 class="text-center">紧急联系方式</h3>

        <div must class="form-group">
            <label>紧急联系人</label>
            <input type="text" class="form-control" name=" emergent_number" placeholder="请输入紧急联系人">
        </div>
        <div must class="form-group">
            <label>关系</label>
            <input type="text" class="form-control" name="emergent_relation" placeholder="请输入关系">
        </div>
        <div must class="form-group">
            <label>联系电话</label>
            <input type="text" class="form-control" name="emergent_phone" placeholder="请输入联系电话">
        </div>
        <div must class="form-group">
            <label>微信</label>
            <input type="text" class="form-control" name="emergent_wechat" placeholder="请输入微信">
        </div>

        <h3 class="text-center">营队报名选项</h3>

        <p>报名营队套餐类型（请在以下二个报名选项中勾选其一）</p>

        <div class="package form-group" style="border:1px solid #337ab7">
            <div class="radio">
                <label>
                    <input type="radio" name="packages" value="套餐A -磐远游学团" checked> 套餐A -磐远游学团
                </label>
            </div>
            <label>报名城市</label>
            <div class="radio">
                <label>
                    <input type="radio" name="packageA" value="洛杉矶" checked> 洛杉矶
                </label>
                <label>
                    <input type="radio" name="packageA" value="旧金山"> 旧金山
                </label>
                <label>
                    <input type="radio" name="packageA" value="西雅图"> 西雅图
                </label>
                <label>
                    <input type="radio" name="packageA" value="波士顿"> 波士顿
                </label>
            </div>
            <div class="time-wrap">
                <div class="form-group" data-v="0">
                    <label>洛杉矶营队</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="package" value="洛杉矶营队A: 2018/07/15-2018/07/29" checked> 洛杉矶营队A: 2018/07/15-2018/07/29
                        </label>
                        <label>
                            <input type="radio" name="package" value="洛杉矶营队B: 2018/07/22-2018/08/05"> 洛杉矶营队B: 2018/07/22-2018/08/05
                        </label>
                    </div>
                </div>
                <div class="form-group" data-v="1">
                    <label>旧金山营队</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="package" value="旧金山营队A: 2018/07/15-2018/07/29"> 旧金山营队A: 2018/07/15-2018/07/29
                        </label>
                        <label>
                            <input type="radio" name="package" value="旧金山营队B: 2018/07/22-2018/08/05"> 旧金山营队B: 2018/07/22-2018/08/05
                        </label>
                    </div>
                </div>
                <div class="form-group" data-v="2">
                    <label>西雅图营队</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="package" value="西雅图营队A: 2018/07/22-2018/08/05"> 西雅图营队A: 2018/07/22-2018/08/05
                        </label>
                        <label>
                            <input type="radio" name="package" value="西雅图营队B: 2018/07/29-2018/08/12"> 西雅图营队B: 2018/07/29-2018/08/12
                        </label>
                    </div>
                </div>
                <div class="form-group" data-v="3">
                    <label>波士顿营队</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="package" value="波士顿营队A: 2018/07/08-2018/07/22"> 波士顿营队A: 2018/07/08-2018/07/22
                        </label>
                    </div>
                </div>
            </div>
            <h5>行程:15天 费用:9900 美金/每人</h5>
            <p>*建议学龄12岁以上, 父母无需陪同</p>
            <p>*磐远游学团时间配合长江商学院暑期海外选修课程</p>
            <p>*行程一周会在长江商学院海外选修课程城市举行</p>
            <p>*另一周则会在北卡夏洛特举行</p>
        </div>

        <div class="package form-group">
            <div class="radio">
                <label>
                    <input type="radio" name="packages" value="套餐B -磐远亲子夏令营"> 套餐B -磐远亲子夏令营
                </label>
            </div>
            <h5>行程:15天 费用:7900 美金/每人</h5>
            <p>*建议学龄未满12岁, 需父母陪同</p>
            <p>*亲子夏令营地点两周皆在在北卡夏洛特</p>
            <p>*磐远亲子夏令营时间配合长江商学院暑期海外选修课程</p>
        </div>

        <div class="form-group">
            <h3 class="text-center">营队套餐内容选项</h3>
            <div class="radio">
                <label>
                    <input type="radio" name="packages1" value="生存力及领导力主题+科学领域主题" checked> 生存力及领导力主题+科学领域主题
                </label>
                <label>
                    <input type="radio" name="packages1" value="生存力及领导力主题+艺术领域主题"> 生存力及领导力主题+艺术领域主题
                </label>
            </div>
        </div>

        <p>学员个人信息，如学员在报名表中提供的个人信息， 主要用于完成预定、为学员提供其所订购之产品与服务（包括旅游保险）和客户服务等目的，以及代为报名美国当地著名学校和文体机构夏令营活动所需，，或为履行学员与磐远之间协议之目的。</p>
        <p>*磐远可将收集的学员个人信息与磐远所属公司、保险理 赔受理机构及为提供本条款与条件项下课程和活动而提供服务的供货商共享，并可为实现条款与项目的而使用。</p>
        <p>*磐远使用学员的个人信息的行为与方式应符合相关法律的规定，且不得侵犯学员隐私。</p>
        <p>*如学员个人信息发生变更，包括住址、电话或电子邮 箱等，学员应及时通知磐远；未及时通知的，学员自行承担责任。</p>
        
        <h3 class="text-center">汇入美元时所要填写信息</h3>
        <table class="table table-striped">
        	<tr>
        		<td>公司名称:</td>
        		<td>Panorama Holdings, LLC</td>
        	</tr>
        	<tr>
        		<td>公司地址:</td>
        		<td>6101 Carnegie Blvd, Suite 103 Charlotte, NC 28209 US</td>
        	</tr>
        	<tr>
        		<td>银行名称:</td>
        		<td>Bank of America</td>
        	</tr>
        	<tr>
        		<td>银行地址:</td>
        		<td>NC2-200-01-01, 6200 Fairview Road Charlotte, NC 28210 US</td>
        	</tr>
        	<tr>
        		<td>帐户名:</td>
        		<td>Panorama Holdings, LLC</td>
        	</tr>
        	<tr>
        		<td>账户类型:</td>
        		<td>Checking Account  -  Business Advantage Chk</td>
        	</tr>
        	<tr>
        		<td>账号:</td>
        		<td>237035626387</td>
        	</tr>
        	<tr>
        		<td>Swift Code:</td>
        		<td>BOFAUS3N</td>
        	</tr>
        	<tr>
        		<td>Routing Number:</td>
        		<td>026009593</td>
        	</tr>
        </table>
        <br>
        <p>*报名费：报名时支付美元到磐远指定的美国银行账户；</p>
        <p>*学员需按照以下规定时间支付到磐远指定的美国银行账户。报读暑假课程付款规定如下： 若就读地为美国报名日期为2018年3月9日及之前的，应在报名之日 起30日内付讫。</p>

        <div must class="form-group">
            <input class="terms" type="checkbox" name="" value="">
            本人确认<a class="liability" href="javascript:;">风险和免责声明书</a>并同意<a class="liability2" href="javascript:;">条件与条款</a>
        </div>
        
        <button type="button" class="btn btn-primary btn-lg submit disabled">提交</button>
    </form>
</div>

<div class="book">
    <span class="book-close text-center" href="javascript:;">&times;</span>
    <div class="book1">
        <h3 class="text-center">风险和免责声明书</h3>
        <p>本人（“免责方”），以下签署人，已年满 18 岁，为考虑被允许参加 磐远美国游学团/ 磐远美国亲子夏令营（以下简称“活动”），代表我自己和我的继承人、执行人、管理人及受让人，在此免除追诉并永久放弃对磐远控股公司、 雇员、代理人、赞助商和他们的代表、他们的继承人、管理人员、和执行人员（以下简称 “被免责方”）由于本人参加活动或活动相关的活动引起、产生、或发生的任何人身伤害或 已知或未知的人身伤害、死亡和/或财产损失而导致的任何及所有索赔、要求、诉讼或诉讼权利、或法律上产生的任何种类或性质的权益。</p>
        <p>本人对自行选择参加活动所关联的风险已了解并确认。本人证明自己具有足够强健的体魄参与活动，且合格的医务人员未持相反意见。本人承担活动过程中可能发生任何伤害或损害的全部责任。 本人签署此免责书并不表示免除被免责方因其疏忽行为或未采取行动而造成的损害。但是，如果本人受伤，而之后由有管辖权的法院判定本人的伤害不是因被免责方全部或部分疏忽或未行动所引起，本人同意赔偿被免责方或其保险公司任何与此索赔相关的辩护费用。</p>
        <p>本人特此授权在紧急情况下实施任何认为有必要的急救和/或医疗。如果本人未能及时如此做，本人也授权现场照护医务人员以本人名义签署任何同意表格和其他适当的医疗文 件。本人理解本人的任何医疗费用由本人负责。本人特此证明在注册过程中提供的数据是尽我所知且真实正确。本人理解如果任何资料被证明不准确，活动的行政人员有权排除本人参与活动。 免责方同意此免责、放弃、承担风险和赔偿协议的目的是在美国法律允许范围内尽可能 广泛和包容，如果协议的任何部分被认定为无效，双方同意其余条款将继续具有十足效力 及作用。 本人在下面的签名表示本人已详细阅读了上列豁免和免责条款并同意其内容。本人自愿签 署此份免责书。</p>
        <p>未满18岁申请人的家长或监护人</p>
        <p>本人是下列未成年儿童(们）的父母和/或法定监护人，儿童姓名为：</p>
        <p>本人在下面签名表示同意让我的孩子（们）参与上述活动。本人进一步证明在整个注册过 程中，我已审阅所有提供给我孩子（们）的数据和/或由主办单位提供的数据。代表本人 和我的孩子（们），本人同意上述的豁免和免责条款。本人尽我所知提供活动主办单位本人和我的孩子（们）的数据，所提供数据均真实正确。本人理解如果任何资料被证明不准确，活动的行政人员有权排除我的孩子参与活动。</p>
    </div>
    <div class="book2">
        <h3 class="text-center">条款与条件</h3>
        <p>报名方式可通过电话、邮件提交报名信息或至磐远咨询处索取报名表后自行报名。组织者接受 报名后，将向学员发送确认函。 学员报名表中所提供的地址、电子邮件及电话应准确无误，以确保在发送重要通知时（如行程变更）可以联系到学员及其监护人。</p>
        <p>美国游学团申请:  前往美国的学员必须在报名14天内，填写健康申明书，若延迟提交或是未完全填写，磐远有权取消学员的海外游学资格。出发前， 学员还应提供过往接种疫苗的报告。</p>
        <p>价格</p>
        <p>磐远游学团套餐A每人费用为9900美金(其中包含报名费：250美金；旅行意外保险100美金)</p>
        <p>亲子夏令营套餐B每人费用为7900美金(其中包含报名费：250美金；旅行意外保险100美金)</p>
        <p>课程费用包括以下项目： ◎住宿：行程内全程住宿，以及周末家庭出游酒店住宿费用◎餐饮：每日三餐就餐；周末出游三餐就餐◎用车：接送机及夏令营期间接送用车◎学费、资料费、证书费；行程中入内景点的门票；旅游意外伤害保险；◎ 行程中安排的活动及游览 ◎ 磐远学员手册及其他准备资料（出发前1至2周 发放）◎课程完成后的磐远证书 ◎磐远游学团套餐行程中所规划美国境内城市往返北卡夏洛特机票。</p>
        <p>课程费用不包括以下项目：◎亲子夏令营套餐的并不包含美国国内往返北卡夏洛特机票◎签证及签证服务费 ◎ 医疗旅行保险 ◎ 学员从所在城市往返签证城市和出发地城市的交通费、食宿费等相关费用 ◎ 因领馆原因导致签证时间更改、要求面谈或再次 面谈、要求父母陪同面谈、补录/重录指纹、补交签 证材料、往返领馆所产生的交通费、食宿费 等相关费用； ◎学员签证拒签后再次申请签证的费用◎飞机、汽车或轮船上的餐饮及过夜中转时的餐饮费用◎ 活动行程以外项目及个人花销 ◎ 机场税费及燃油附加费的调整◎汇率差价造成的货币附加费◎入住校园宿舍/学生公寓/度假村/寄宿学校等须支 付的住宿押金，该押金在退房时查验后可退还 。</p>
        <p>付款</p>
        <p>◎报名费：报名时支付美元到磐远指定的美国银行账户；◎学员需按照以下规定时间支付到磐远指定 的美国银行账户。报读暑假课程付款规定如下： 若就读地为美国报名日期为2018年3月9日及之前的，应在报名之日 起30日内付讫。◎付款信息如下 ◎银行帐户信息：
        <p>银行名称:  Bank of America</p>
        <p>银行地址:  NC2-200-01-01, 6200 Fairview Road Charlotte, NC 28210 US</p>
        <p>公司名称：Panorama Holdings, LLC</p>
        <p>公司地址:  6101 Carnegie Blvd, Suite 103 Charlotte, NC 28209 US </p>
        <p>帐户名:  Panorama Holdings, LLC </p>
        <p>账户类型:  Checking Account  -  Business Advantage Chk </p>
        <p>账号:  237035626387 Swift Code:  BOFAUS3N Routing Number:  026009593</p>
        
        <p>◎磐远收到付款后，出具磐远收据。◎汇款手续费：境内及境外手续费皆由学员承担。◎延期付款：磐远有权按日收取1%的滞纳金，延期超 过30天的，视为学员于出发日取消课程。 </p>
        <p>费用调整:  出发前，若因相关汇率或发生非磐远所能控制的其他情况，致使游学/留学 成本增加的，磐远可以对费用进行调整，并及时通知学员。 </p>
        <p>折扣及优惠:  不同的折扣、优惠不可同时享用，除非磐远有其他相关政策。 </p>
        <p>机票: 美国亲子夏令营以及美国游学团的行程因配合长江商学院海外选修课程，并未包含美中往返机票，请家长自行购票，并与磐远确认航班时间和地点。 磐远将根据美国游学团课程的安排为学员统一订购各大城市往返北卡夏洛特所需机票，学员应听从随行老师指示，带队统一准时前往相应机场。 美国亲子夏令营的目地为北卡夏洛特，故磐远不提供美国国内飞往北卡夏洛特的机票费用。</p>
        <p>护照 </p>
        <p>护照办理：学员需自行办理护照，保证护照在游学 回国之日起还有至少6个月的有效期。出发前3个 月，学员应保证护照在手，随时可以申请签证。因学员护照原因无法成行，磐远不承担相关责任，费用不予退还。 护照保管：自学员抵达美国开始行程时起至课程结束返回机场准备离境美国止，磐远将协助保管学员护照。 若出现学员须亲自持有或使用护照的情形，使用完毕后学员有义务及时将护照交由磐远保管。 护照损毁：若学员护照遗失、破损而必须补办的，磐远应协助办理，因此发生费用（包括但不限于磐远人 员的合理交通费、食宿费及护照办理费）由过错方承担。 </p>
        <p>签证 </p>
        <p>学员需自行办理护照签证，学员应在预约的时间内按时前往使领馆参加面试， 否则产生的额外签证费用，由学员承担；若因学员 不按时参加面试导致无法出行，视为学员于面签日即取消课程。学员能否获得 签证由使领馆决定，磐远不负保证义务。 </p>
        <p>食宿安排 </p>
        <p>住宿安排：磐远将按课程类型的不同安排学员入住学生宿舍或寄宿家庭，通常需与其他学员共享房间。周末出游活动期间将入住酒店，每个房间入住人数视酒店而定。 学员入住宿舍或酒店时，可能需现金缴纳钥匙及物 品损毁保证金，若学员损坏住处物品的，磐远将从保证金中扣除赔偿金额，余额将在学员离开宿舍或酒 店时退还学员。膳食安排：将提供每日三餐，周末出游三餐就餐。前往美国和离开途中，磐远不负责提供膳食。</p>
        <p>保险 </p>
        <p>经签署保险代购协议后，磐远将会帮您购买团体旅游意外险(旅美游学行程期间费用已包含旅游意外险的保险费用)。凡自行购买保险之学 员，需提交其另外购买之有效保单之英文副本一份， 以供核实。前往美国的学员，其父母或监护人须签署 一份医疗免责书。 </p>
        <p>健康声明</p>
        <p>未成年学员经监护人或自身(已成年学员)确认身体健康状况良好，并与合格的专业师师意见相同，拥有强健的体魄足可负荷营队活动安排，若有因为过敏或是个人特殊身体状况需要服用、使用个人医疗物品、药品、器材等情形，必须事先告知磐远工作人员，并且确保学员自身能够正确</p></p>
        <p>自行使用个人医疗物品、药品、器材等，磐远无需负担协助学员自身的医疗用药和器材使用之责任。</p>
        <p>调整或变更</p>
        <p>磐远应尽量按照宣传册的内容安排课程和活动，但如遇非常原因（包括但不限于交通、气候、政府、意外原因等）无法执行原课程或活动，或磐远认为执行原课程或活动将于学员不利，则磐远有权在不影响学员 利益的情况下调整或取消原课程或活动，但应及时 将调整方案及原因告知学员和/或其监护人（在可以 联系上监护人的前提下）。若某项活动或课程因故无法提供，磐远又未能提供备选活动或课程的，磐远应 就该项活动或课程进行费用返还。 若情况发生变化导致磐远不得不变更课程类型，则磐远应至少在出发前30天通知学员。磐远将根据学员第二选择安排课程并通知学员，学员若不接受变更后的课程，在接到通知后5天内可以申请顺延至下一 年的游学课程课程，已经支付的课程费用将从新的 课程费用中抵扣。 </p>
        <p>学员语言程度 </p>
        <p>本营队旨在融入美国当地教学环境与生活，课程中会有大量活动与美国当地学生互动，建议参加学员自身评估过有基础的英语认知水平，能够了解授课老师的基本指令(例如老师要求学生停止不当行为)，以保障学员自身学习质量。 </p>
        <p>退费</p>
        <p>◎ 不可抗力情形：因不可抗力导致课程无法进行 的，扣除已发生的费用后退还剩余费用。 ◎ 课程取消保险下的退费： 对于符合取消保险的情形，在学员提供了相关证据的情况下，磐远将在扣除报名费后退还其他费用。 ◎磐远亲子夏令营取消课程情形： 亲子夏令营课程须有3个家庭以上参加方可成行。如亲子夏令营成行 学员仍然少于3个家庭，则磐远有权取消该课程，磐远将于2018/04/01前通知学员，按学员的要求提前终止协议、退还所有已交费用。◎磐远游学团取消课程情形： 磐远游学团课程须有5名学员以上参加方可成行。如亲子夏令营成行 学员仍然少于5名学员，则磐远有权取消该课程，磐远将于2018/04/01前通知学员，按学员的要求提前终止协议、退还 所有已交费用。◎ 学员拒签：磐远将退还团费扣除报名费以及活动已经支出的固定成本开销(暑期营队课程费用于2018/04/30之前可退还50%，2018/05/01之后将无法退款)；◎ 学员获得签证后但于出发前取消课程情形（包括 课程视为被学员取消）：◎ 报名费：不予退还 ◎ 医疗旅行保险费：全额退还 ◎课程费按以下标准退还： 于2018/04/01出发前取消，可退还已缴纳部分的 100%，于2018/04/30之前取消，可退还50%，于2018/05/01之后将无法退款；◎学员出发后不予退费。但如遇非常原因（包括但不限于交通、气候、政府、意外原因等）无法执行原课程或活动，或磐远认为执行原课程或活动将于学员不利，则磐远有权在不影响学员 利益的情况下调整或取消原课程或活动，但应及时 将调整方案及原因告知学员和/或其监护人（在可以 联系上监护人的前提下）。若某项活动或课程因故无法提供，磐远又未能提供备选活动或课程的，磐远应就该项活动或课程进行费用返还。  </p>
        <p>退费申请材料 </p>
        <p>申请退款时，学员须提供以下材料及信息： ◎ 由监护人签字的取消课程及退款申请；◎ 课程费收据原件（若有）； ◎付款时使用的银行汇款信息（如选择用银行卡支付 的），退款将直接支付到该银行账户中。 </p>
        <p>退费流程 </p>
        <p>退费得到批准后，因退费产生的汇款手续费，学员承担境内与境外手续费。 退款流程和时间通常为自磐远批准退款申请日起10到15个 工作日，因城市和金融机构不同而有所差别。 </p>
        <p>纪律 </p>
        <p>◎学员应按时参加课程和活动，因特殊原因无法参加者，应至少提前一天请假。 ◎ 学员不得使用或者藏匿酒精和毒品。◎ 学员不得在学校、酒店、宿舍或寄宿家庭吸烟。 ◎ 若磐远规定有宵禁时间，学员应严格遵守。 ◎学员不得损坏寄宿家庭、宿舍、学校的财产。 ◎ 学员应遵守美国法律规定，行为适当，不得有粗 暴或危险行为，不得干扰磐远的教学、活动，不得 侵犯他人人身和财产权利。◎ 学员不得散布谣言或捏造不实言论从而损害磐远或 磐远员工或寄宿家庭人员名誉。◎学员不得因磐远员工或寄宿家庭的种族、年龄、性 别、外表、国籍或文化背景而提起投诉。 </p>
        <p>行前说明 </p>
        <p>学员必须参加行前会议（在线或线下），并且在出发 前阅读学生手册和安全规则。 </p>
        <p>人身及财产安全 </p>
        <p>磐远将尽谨慎勤勉责任，有权并有义务采取一切合 理措施使课程和活动顺利开展，保障学员的人身及财产安全。 若学员有任何先天或后天严重的慢性或过敏性疾 病（如对药物、植物、宠物等过敏），必须于报名时 如实告知磐远。 如有哮喘病、心脏病、一年内做过手 术、精神类疾病不适宜参加本次活动， 一经发现磐远有权解除协议，由此产生的费用由学员承担学员应注意保护自己的人身安全，妥善保管个人物品 和现金，如发生人身意外或行李物品遗失、被盗、被 抢等情况，应立即通知磐远人员。 学员参加非磐远所组织的活动，包括但不限于探亲访友，费用应由学员自己承担，相关的人身及财产安全 应由学员自己承担。 </p>
        <p>探亲访友 </p>
        <p>学员在整个课程中全部行程必须随团集体活动，或在随行老师的安排下活动，不得私自出去活动。若 学员需探访亲友，应事先通知磐远并获得磐远的批准， 并须在出发前至少2周前将监护人签字的亲友探访 表提交给磐远。亲友探访表需注明学员将探访亲友的 数据及该亲友的联络信息，包括住址、联络电话及 有效证件。因为探亲访友错过的课程和活动，不予 补课或退款。</p>
        <p>个人信息 </p>
        <p>学员个人信息，如学员在报名表中提供的个人信息， 主要用于完成预定、为学员提供其所订购之产品与服务（包括旅游保险）和客户服务等目的，以及代为报名美国当地著名学校和文体机构夏令营活动所需，或为履行学员与磐远之间协议之目的。 磐远可将收集的学员个人信息与磐远所属公司、保险理 赔受理机构及为提供本条款与条件项下课程和活动而提供服务的供货商共享，并可为实现条款与项目 的而使用。磐远使用学员的个人信息的行为与方式应 符合相关法律的规定，且不得侵犯学员隐私。 如学员个人信息发生变更，包括住址、电话或电子邮 箱等，学员应及时通知磐远；未及时通知的，学员自行承担责任。 </p>
        <p>知识产权 </p>
        <p>接受本条款与条件意味着学员同意磐远使用磐远和/或磐远工作人员在课程过程中含有学员形象、声音的所有照片、影片和声音数据，无须另行获得学员的许可，作为营队形象宣传用途，但不会作为版权买卖等交易行为。若不同意磐远使用含有学员的照片、影片和声音，可告知磐远工作人员，磐远将尊重个人隐私，不会使用学员的相关照片、影片和声音数据。 </p>
        <p>违约责任 </p>
        <p>双方同意以下情形视为严重违约： ◎除另有约定外，磐远未能提供本条款与条件项下的课程和活动且未及时提供补救方案的；◎ 学员严重违反纪律规定或磐远规定的其他行为准则，且经书面警告仍未改正的； ◎学员违反目的国法律且被追究法律责任的； ◎学员违反知识产权条款约定义务的； ◎学员擅自离团或私自滞留目的地国家； ◎磐远或学员有其他违约行为且在收到另一方书面通 知日起30日内未予以纠正的。 ◎以下违约责任可同时或分别适用： ◎双方同意，在出现上述违约情形时，非违约方有权解除本条款与条件并要求违约方赔偿损失； ◎ 一方给另一方造成人身伤害或财产损失，应予以赔偿； ◎ 若学员有上述严重违约情形，磐远还有权将其提前送回中国，学员需自行承担所有费用，包括磐远人员 陪同返国的费用； ◎若学员擅自离团或私自滞留目的国，磐远除协助查 找学员下落外不承担其他责任；学员应对其擅自离 团或滞留期间所发生的任何人身伤害及/或财产损失自行承担责任。 </p>
        <p>终止 本条款与条件将在以下任一情形下终止： ◎ 课程结束且学员返回中国； ◎磐远批准学员的退款申请； ◎ 磐远或学员根据约定提前解除本条款与条件；◎ 法律法规规定的其他情形。 双方同意，除上述情形外，不得解除本条款与条件； 学员解除本条款与条件的，磐远将不予退款，磐远也有 权要求学员继续履行本条款与条件。 </p>
        <p>责任限制 磐远因未能履行本条款与条件及双方另行签署的协议 项下的义务而需承担的全部责任，应以学员支付的 费用总额为限。 </p>
        <p>拼写错误和”排印错误“ 磐远有权更正本手册印刷排版上的错误或拼写错误。 对于此类明显的错误，磐远不受其约束。 </p>
        <p>不可抗力 若发生双方无法预见、无法预防、无法避免和无法 控制的事件，包括但不限于台风、暴雨、暴雪等自然 灾害，政府行为（包括领馆），国际形势变化，大型病役，飞机等交通延误或取消，以致任何一方不能履 行或不能如期履行义务，或导致任何一方增加额外费用，则双方互不承担赔偿或补偿责任。但任何一方 遇到不可抗力情形，应尽快通知另一方，并采取必要 措施防止损失进一步扩大。 </p>
        <p>适用法律 本条款与条件须受美国法律的管辖。因本条款与条件引起的或与之相关的任何争议、纠纷或索赔，以民事法庭仲裁方式予以解决。仲裁员 为一名，仲裁地点为美国北卡罗莱纳州夏洛特，仲裁语言为英语。 经过与磐远详细咨询与协商，学员/监护人已充分理解 磐远游学/留学的内容与方式、课程和活动安排、付款 条款、退款条款和本条款和条件的内容，特别是粗 体部分条款。学员特此同意遵守所有条款与条件并 自愿参加所报名的游学/留学课程。 </p>
        <p>请确认已详细阅读以上条款与条件,并于阅读完毕后在下方字段签名,表示您已阅读、了解并同意接受本条款与条件之所有内容。 若您未满二十岁,应于您的法定代理人阅读、了解并同意本条款与条件之所有内容。</p>
    </div>
</div>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">提示</h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</body>
</html>
<script>
    $(function(){
        // 日期控制器
        $('.date').datetimepicker({  
            format: 'YYYY-MM-DD',  
            locale: moment.locale('zh-cn')  
        });
        $(document).on('click','.date input',function(){
            $(this).parents('.date').find('span').click();
        });

        $(document).on('change','.fill input[type=radio]',function(){
            console.log(1)
            if($(this).val()=='是'){
                $(this).parents('.fill').find('.text').show(0);
            }else{
                $(this).parents('.fill').find('.text').hide(0).val('');
            };
        });

        $('input[name=package]').change(function(){
            if($(this).prop('checked')){
                var num=$(this).parents('.form-group').data('v');
                $('[name=packageA]').eq(num).prop('checked',true);
            };
        });

        $('[name=packageA]').change(function(){
            if($(this).prop('checked')){
                $('[data-v='+$(this).parent().index()+']').find('input').eq(0).prop('checked',true);
            }
        });

        $('.liability').click(function(){
            $('.book').fadeIn(300);
            $('.book1').show(0);
            $('.book2').hide(0);
        });
        
        $('.liability2').click(function(){
            $('.book').fadeIn(300);
            $('.book2').show(0);
            $('.book1').hide(0);
        });
        $('.book-close').click(function(){
            $('.book').fadeOut(300);
        });
    });

    $('.terms').change(function(){
        if(!$(this).prop('checked')){
            $('.submit').addClass('disabled');
        }else{
            $('.submit').removeClass('disabled');
        }
    });

    $('.package').click(function(){
        $(this).find('.radio').eq(0).find('input').prop('checked',true);
        $('.package').css('border','1px dashed #ccc');
        $(this).css('border','1px solid #337ab7');
        if($(this).find('input').length<2){
            $(this).siblings('.package').find('input').each(function(){
                $(this).prop('checked',false);
            })
        }
    });

    $('.submit').click(function(){
        if($(this).hasClass('disabled')) return;
        var must=$('[must]').length;
        var leng=0;
        $('[must]').each(function(){
            var ipt=$(this).find('input');
            // 普通输入框校验
            if(ipt.length==1 && ipt.attr('type')=='text'){
                if(ipt.val()==''){
                    $('.modal-body').text($(this).find('label').text()+'未填写');
                    $('#myModal').modal();
                    return false;
                };
            };
            // 过敏校验
            if($(this).find('.fill').length){
                var gm=$(this).find('input:checked').val();
                if(gm=='是'){
                    if($(this).find('input[type=text]').val()==''){
                        $('.modal-body').text($(this).children('label').text());
                        $('#myModal').modal();
                        return false;
                    };
                };
            };

            leng+=1;
        });

        if(must==leng){
            // 提交表单
            var post=$('#myform').serialize();
            $.ajax({
                type: "post",
                url: "/form/post.php",
                data: post,
                dataType: "json",
                success: function(data){
                    if('ok'==data){
                        $('.modal-body').text('提交成功!');
                        $('#myModal').modal();
                    }else{
                        $('.modal-body').text('提交失败,请重试!');
                        $('#myModal').modal();
                    }
                }
            });
        };
    });

    $('.add-xueyuan').click(function(){
        var leng=$('.xueyuanxinxi').length+1;
        var xinxi='<div class="xueyuanxinxi">\n' +
            '            <h3 class="text-center">学员个人信息'+leng+'</h3>\n' +
            '            <div must class="form-group">\n' +
            '                <label>孩子中文姓名</label>\n' +
            '                <input type="text" class="form-control" name="name'+leng+'" placeholder="请输入孩子中文姓名">\n' +
            '            </div>\n' +
            '            <div class="form-group">\n' +
            '                <label>孩子性别</label>\n' +
            '                <div class="radio">\n' +
            '                    <label>\n' +
            '                        <input type="radio" name="sex'+leng+'" value="男" checked> 男\n' +
            '                    </label>\n' +
            '                    <label>\n' +
            '                        <input type="radio" name="sex'+leng+'" value="女"> 女\n' +
            '                    </label>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '            <div must class="form-group">\n' +
            '                <label>护照英文姓名拼音</label>\n' +
            '                <input type="text" class="form-control" name="e_name'+leng+'" placeholder="请输入护照英文姓名拼音">\n' +
            '            </div>\n' +
            '            <div must class="form-group">  \n' +
            '                <label>出生日期</label>  \n' +
            '                <div class="input-group date">  \n' +
            '                    <input type="text" name="birthday'+leng+'" class="form-control">\n' +
            '                    <span class="input-group-addon">  \n' +
            '                        <i class="glyphicon glyphicon-calendar"></i>  \n' +
            '                    </span>  \n' +
            '                </div>  \n' +
            '            </div>\n' +
            '            <div must class="form-group">\n' +
            '                <label>护照号码</label>\n' +
            '                <input type="text" class="form-control" name="passport'+leng+'" placeholder="请输入护照号码">\n' +
            '            </div>\n' +
            '            <div must class="form-group">\n' +
            '                <label>国籍</label>\n' +
            '                <input type="text"  name="nationality'+leng+'" class="form-control" placeholder="请输入国籍">\n' +
            '            </div>\n' +
            '            <div must class="form-group">\n' +
            '                <label>是否有对食物过敏?</label>\n' +
            '                <div class="fill">\n' +
            '                    <label>\n' +
            '                        <input type="radio" name="is_food'+leng+'" value="是"> 是\n' +
            '                    </label>\n' +
            '                    <label>\n' +
            '                        <input type="radio" name="is_food'+leng+'" value="否" checked> 否\n' +
            '                    </label>\n' +
            '                    <input style="display:none" type="text" name="food_name'+leng+'" class="form-control text" placeholder="请输入过敏食物">\n' +
            '                </div>\n' +
            '            </div>\n' +
            '            <div must class="form-group">\n' +
            '                <label>是否有对药物过敏?</label>\n' +
            '                <div class="fill">\n' +
            '                    <label>\n' +
            '                        <input type="radio" name="is_medicine'+leng+'" value="是"> 是\n' +
            '                    </label>\n' +
            '                    <label>\n' +
            '                        <input type="radio" name="is_medicine'+leng+'" value="否" checked> 否\n' +
            '                    </label>\n' +
            '                    <input style="display:none" type="text" class="form-control text" name="medicine_name'+leng+'" placeholder="请输入过敏药物">\n' +
            '                </div>\n' +
            '            </div>\n' +
            '            <div must class="form-group">\n' +
            '                <label>是否有个人特殊要求?</label>\n' +
            '                <div class="fill">\n' +
            '                    <label>\n' +
            '                        <input type="radio" name="is_require'+leng+'" value="是"> 是\n' +
            '                    </label>\n' +
            '                    <label>\n' +
            '                        <input type="radio" name="is_require'+leng+'" value="否" checked> 否\n' +
            '                    </label>\n' +
            '                    <input style="display:none" type="text" name="require_name'+leng+'" class="form-control text" placeholder="请输入个人特殊要求">\n' +
            '                </div>\n' +
            '            </div>\n' +
            '        </div>';
        $(this).before(xinxi);
        $('.xueyuan-number').val(leng);
        $('.date').datetimepicker({
            format: 'YYYY-MM-DD',
            locale: moment.locale('zh-cn')
        });
    });
</script>
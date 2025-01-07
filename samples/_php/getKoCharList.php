<?php
include_once __DIR__."/unicode.php";
function getHangulJamosCharList()
{
	$a="";
	for($k=4352;$k<=4370;$k++) $a.=unichr($k);
	for($k=4449;$k<=4469;$k++) $a.=unichr($k);
	for($k=4520;$k<=4546;$k++) $a.=unichr($k);
	return $a;
}
function getHangulSyllablesCharList()
{
	$a="";
	for($k=44032;$k<=55203;$k++) $a.=unichr($k);
	return $a;
}
function getHangulCharList()
{
	return getHangulJamosCharList().getHangulSyllablesCharList();
}
function getHanjaByLevelCharList($n)
{
	// list: made from https://hanjasajun.co.kr/
	// check: https://hanja.dict.naver.com/
	//        https://www.koreanwikiproject.com/wiki/Category:Hanja_characters
	$a="";
	if($n=="hanja8") // 50 chars
		$a.="校敎九國軍金南女年大東六萬母木門民白父北四山三生西先小水室十五王外月二人一日長弟中靑寸七土八學韓兄火";
	else if($n=="hanja7") // 100 chars
	{
		$a.="家間江車工空氣記男內農答道動力立每名物方不事上姓世手時市食安午右子自場電前全正足左直平下漢海話活孝後";
		$a.="歌口旗同洞冬登來老里林面命文問百夫算色夕少所數植心語然有育邑入字祖住主重紙地千天川草村秋春出便夏花休";
	}
	else if($n=="hanja6") // 150 chars
	{
		$a.="各角界計高公共功果科光球今急短堂代對圖讀童等樂利理明聞半反班發放部分社書線雪成省消術始身神信新弱藥業";
		$a.="勇用運音飮意作昨才戰庭第題注集窓淸體表風幸現形和會";
		$a.="感強開京古苦交區郡根近級多待度頭例禮路綠李目美米朴番別病服本使死席石速孫樹習勝式失愛夜野陽洋言英永溫";
		$a.="園遠由油銀醫衣者章在定朝族晝親太通特合行向號畫黃訓";
	}
	else if($n=="hanja5") // 200 chars
	{
		$a.="價客格見結決敬告課過觀關廣具舊局基己念能團當德到獨朗良旅歷練勞流類陸望法變兵福奉史士仕産商相鮮仙說性";
		$a.="洗歲束首宿順識臣實兒惡約養要友雨雲元偉以任材財的傳典展節切店情調卒種週州知質着參責充宅品必筆害化效凶";
		$a.="加可改擧去件建健輕競景考固曲橋救貴規給汽期技吉壇談都島落冷量領令料馬末亡買賣無倍比費鼻氷寫思査賞序善";
		$a.="選船示案漁魚億熱葉屋完曜浴牛雄願院原位耳因再災爭貯赤停操終罪止唱鐵初最祝致則他打卓炭板敗河寒許湖患黑";
	}
	else if($n=="hanja4")
	{
	  //     １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
	  //$a.="假街減監講康個檢潔缺境經警慶係故官求句究宮權極禁器起暖難怒努斷單檀端達擔黨帶隊導毒督銅斗豆得燈羅兩麗";
		$a.="假街減監講康個檢潔缺";
	  //$a.="連列錄論留律滿脈毛牧武務未味密博防房訪配背拜罰伐壁邊寶報步保復府富副婦佛飛備非悲貧寺師謝舍殺常床想狀";
		$a.="";
	  //$a.="設誠聲盛聖城星勢稅細笑掃素續俗送受守授收收純承詩試視施是息申深眼暗壓液羊餘如逆硏硏演榮藝誤玉往謠容圓";
		$a.="";
	  //$a.="員衛爲肉恩陰應議義移益印引認將障低敵田絶接政程精提制製除際祭祭鳥助早造尊宗走竹準衆增志指支至職進眞次";
		$a.="";
	  //$a.="察創處請總銃築蓄忠蟲取測治置齒侵快態統退波破砲包布暴票豊限航港解鄕香虛驗賢血協惠好戶護呼貨確回吸興希";
		$a.="";
	}
	else if($n=="hanja3")
	{
		$a.="";
	}
	else if($n=="hanja2")
		$a.="";
	else if($n=="hanja1")
		$a.="";
	return $a;
}
function getHanja1800aCharList()
{
	$a="";
	$a.="家佳街可歌加價假角各脚干間看渴甘減感敢甲江降講强改皆個開客更去巨居車擧建乾犬見堅決結潔京景輕經庚耕敬驚慶競癸季界計溪鷄古";
	$a.="故固苦考高告谷曲穀困坤骨工功空共公果課科過官觀關光廣交校敎橋九口救究久舊句求國君軍郡弓權卷勸貴歸均極近勤根金今禁給及急記";
	$a.="期基氣技其幾己起旣吉暖難南男內乃女年念怒農能多單短端丹但達談答堂當大對代待德刀到度道島都圖徒獨讀同洞童冬東動斗豆頭得等登";
	$a.="燈落樂卵浪郞來冷良兩量凉旅力歷連練列烈令領例禮路老勞露綠論料流柳留六陸倫律里理利李林立馬莫萬滿晩末望亡忙忘每買賣妹麥免勉";
	$a.="面眠名命明鳴毛暮母木目卯妙武務無戊茂舞墨門問聞文物勿未味美米尾民密朴反飯半發方放訪房防拜杯白百番伐凡法變別病兵丙保步報福";
	$a.="服復伏本奉逢夫父富婦扶部否浮北分不佛朋比非備悲飛鼻貧氷四士史師死思事仕射謝使舍巳寺私絲山産算散殺三上尙常賞商相霜想傷喪色";
	$a.="生西序書暑夕石昔惜席先線善選鮮船仙舌雪說設姓性成城誠盛省星聖聲世洗稅細勢歲小少所消素笑俗速續孫送松水手受授守收數首誰須雖";
	$a.="愁樹壽修秀叔淑宿順純戌崇習拾勝乘承市示是時詩視始施試氏食植識式身神臣信新申辛失室實心深甚十兒我惡安案顔眼暗巖仰愛哀夜野也";
	$a.="約藥弱若羊洋養陽讓揚魚語漁於憶億言嚴業餘與余汝如易逆亦然硏煙熱悅炎葉永英迎榮藝五午吾悟誤烏玉屋溫瓦臥完曰王往外要欲浴用勇";
	$a.="容宇右牛友雨于憂又尤遇雲運云雄元原遠園願怨圓月位危爲偉威由油酉有猶唯遊柔遺幼肉育恩銀乙音飮陰吟邑泣應衣義議醫意依矣二耳移";
	$a.="以已而異益人因引仁忍認寅印一日壬入子字自者慈姉作昨長場將章壯材財在再才栽哉爭貯低著的赤適敵田全前展電傳典戰錢節絶店接正政";
	$a.="定情庭精丁頂停井貞靜淨弟題除帝製第祭諸早造鳥調朝助祖兆足族存尊卒種從宗終鐘左坐罪主注住晝酒宙朱走竹中衆重卽增曾證只止知地";
	$a.="指志支至紙枝持之直眞進辰盡質集執次借且此着察參唱昌窓採菜責冊處妻尺千天川淺泉鐵靑淸聽請晴體初草招村寸最秋追推祝丑春出充忠";
	$a.="蟲取就吹治致齒則親七針快打他脫探太泰宅土通統退投特波破判八敗貝篇便片平閉布抱暴表品風豊皮彼必匹筆下何夏賀河學韓漢恨限閑寒";
	$a.="合恒海解害亥行幸香鄕向虛許革現賢血協兄形刑惠好號湖乎虎戶呼或混婚紅火化花和話華貨畵歡患活黃皇回會孝效後厚訓休凶胸黑興喜希";
	return $a;
}
function getHanja1800bCharList()
{
	$a="";
	$a.="架暇却閣刻覺刊肝幹簡姦懇監鑑康剛鋼綱介慨槪蓋距拒據健件傑乞儉劍檢格擊激隔絹肩遣牽缺兼謙竟境鏡頃傾硬警徑卿系係戒械繼契桂啓";
	$a.="階繫枯姑庫孤鼓稿顧哭孔供恭攻恐貢寡誇郭館管貫慣冠寬鑛狂掛塊愧怪壞郊較巧矯丘俱懼狗龜驅構具區拘球苟菊局群屈窮宮券拳厥軌鬼規";
	$a.="叫糾菌克劇斤僅謹琴禽錦級肯忌棄祈豈機騎紀飢旗欺企奇寄器畿緊那諾納娘奈耐寧努奴腦惱泥茶旦團壇斷段檀淡擔畓踏唐糖黨貸臺隊帶桃";
	$a.="稻跳途陶逃倒導挑盜渡塗毒篤督豚敦突凍銅鈍屯騰羅絡亂欄蘭濫覽廊略掠梁糧諒麗慮勵曆鍊憐聯戀蓮劣裂廉獵零靈嶺隷爐祿錄鹿弄賴雷了";
	$a.="僚龍屢樓累淚漏類輪栗率隆陵吏離裏履梨隣臨磨麻幕漠漫慢茫妄罔媒梅埋脈孟盲盟猛綿滅銘冥募某謀貌慕模侮冒牧睦沒夢蒙墓廟苗貿霧默";
	$a.="微眉迷敏憫蜜博拍薄迫泊叛班返盤般伴髮拔倣芳邦妨傍培輩倍排配背伯煩飜繁罰範犯壁碧辨辯邊竝屛補寶譜普卜複腹覆蜂鳳封峯符簿賦赴";
	$a.="附付腐府副負紛奮墳奔粉憤拂崩卑妃批肥碑秘婢費賓頻聘似捨斯沙蛇詐詞賜寫辭邪査斜司社祀削朔嘗裳詳祥床象像桑狀償雙塞索敍徐庶恕";
	$a.="署緖誓逝析釋宣禪旋涉攝召昭蘇騷燒訴掃疏蔬束粟屬損訟誦頌刷鎖衰囚睡輸遂隨帥獸殊需垂搜孰肅熟循旬殉瞬脣巡術述濕襲僧昇侍矢息飾";
	$a.="伸愼晨審尋牙亞芽雅餓岳雁岸謁壓押央殃涯厄額耶躍樣壤楊御抑焉予輿域役驛疫譯宴燕沿燃演鉛延軟緣閱染鹽泳詠映營影豫譽銳傲嗚娛汚";
	$a.="獄翁擁緩畏腰遙謠搖慾辱庸偶愚郵羽優韻援院源員越胃謂違圍慰僞衛委緯幽惟維乳儒裕誘愈悠閏潤隱淫凝儀疑宜夷翼姻逸任賃刺姿紫資玆";
	$a.="恣爵酌殘潛暫雜張粧腸莊裝墻障藏丈掌葬奬帳臟載災裁宰抵底寂摘滴績跡賊積籍專轉殿折切竊點漸占蝶廷訂程亭征整際堤濟制齊提弔照租";
	$a.="燥組條操潮拙縱佐座周舟州柱株洲奏珠鑄準俊遵仲憎症蒸贈遲智誌池職織珍鎭振陳陣震姪疾秩徵懲差捉錯贊讚慙慘創暢蒼倉債彩策斥戚拓";
	$a.="薦賤遷踐哲徹尖添妾廳替滯逮遞抄肖礎超秒促觸燭總聰銃催抽醜逐縮畜築蓄衝臭趣醉側測層恥値置漆沈侵寢枕浸稱墮妥托濁濯卓歎彈炭誕";
	$a.="奪貪塔湯怠殆態澤擇討吐痛鬪透播罷派頗把販版板編遍偏評幣廢弊肺蔽胞包浦飽捕爆幅標票漂被避疲畢荷鶴旱汗割含咸陷巷港航抗項奚該";
	$a.="核響享軒憲獻險驗顯懸玄縣絃穴嫌脅亨螢衡慧兮毫互浩胡豪護惑昏魂忽洪弘鴻禾禍擴確穫還環丸換荒況悔懷獲劃橫曉侯候毁輝揮携吸稀戱";
	return $a;
}
function getKoCharList()
{
	$s="";
	for($k=8;$k>0;$k--) $s.=getHanjaByLevelCharList("hanja".$k);
	return $s;
}
?>
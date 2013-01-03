<?php
namespace Bing\Tests\Search;

use Bing\HttpClient\ClientInterface;

class WebClientMock implements ClientInterface
{
	/**
	 * Constructor
	 * @param string $baseUri 
	 * @param string $acctKey 
	 * @return void
	 */
	public function __construct($baseUri, $acctKey = '')
	{
	}

	public function request($uri, array $params = array())
	{
	}

	public function getStatusCode()
	{
		return '200';
	}

	public function getRawHeaders()
	{
		return <<<EOF
HTTP/1.1 200 OK
Cache-Control: private
Content-Type: application/json; charset=utf-8
Server: Microsoft-IIS/7.5
X-Content-Type-Options: nosniff
Access-Control-Allow-Origin: *
Access-Control-Allow-Credentials: false
Access-Control-Allow-Headers: Authorization
Access-Control-Allow-Methods: GET, POST, OPTIONS
Access-Control-Max-Age: 604800
ActivityID: d2691fab-b92a-4723-a101-19f53f4f25f5
X-AspNet-Version: 4.0.30319
X-Powered-By: ASP.NET
Date: Mon, 31 Dec 2012 02:43:43 GMT
Content-Length: 36503
EOF;
	}

	public function getBody()
	{
		return '{"d":{"results":[{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=0&$top=1","type":"WebResult"},"ID":"9294a30e-6337-4ad9-b889-f918c5d9c8de","Title":"乳房 - Wikipedia","Description":"乳房 （にゅうぼう、ちぶさ）とは 哺乳類 の メス が持つ授乳器官。単に乳（ちち）あるいはお乳とも言い、俗に おっぱい とも呼ばれる。 乳房は多くの 哺乳類 の メス に存在する、皮膚の一部がなだらかに隆起しているようにみえる ...","DisplayUrl":"ja.wikipedia.org/wiki/おっぱい","Url":"http://ja.wikipedia.org/wiki/%E3%81%8A%E3%81%A3%E3%81%B1%E3%81%84"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=1&$top=1","type":"WebResult"},"ID":"6ae84d81-2213-4367-b669-0a26ff8ef8f9","Title":"2009年4月18日（土）公開映画「おっぱいバレー」公式サイト","Description":"綾瀬はるか主演、映画「おっぱいバレー」公式サイト。2009年4月18日（土）ロードショー！","DisplayUrl":"wwws.warnerbros.co.jp/opv","Url":"http://wwws.warnerbros.co.jp/opv/"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=2&$top=1","type":"WebResult"},"ID":"97f40615-3911-4df8-829f-84716cdb7af0","Title":"おっぱい ‐ ニコニコ動画:Q","Description":"「おっぱい」を\"ニコニコ動画\"で検索！日本最大級の動画サービス「niconico」で動画をみよう！ ... 2012年12月26日 19:36 投稿 23時間前 ぱよ生 #142[2012_12_25] 毎週火曜日22:00～23:00放送 番組へのメールはno@ ...","DisplayUrl":"www.nicovideo.jp/tag/おっぱい","Url":"http://www.nicovideo.jp/tag/%E3%81%8A%E3%81%A3%E3%81%B1%E3%81%84"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=3&$top=1","type":"WebResult"},"ID":"aba28cec-3030-459d-ab8d-26d22d30bb29","Title":"おっぱい！おっぱい！ - あのAAどこ？","Description":"おっぱい！ おっぱい！ おっぱい！ おっぱい おっぱい！ おっぱい！ おっぱい！ ∩ ∩ ﾉ) おっぱい！ おっぱい！ 川 ∩ 川彡\u0027三つ おっぱい！ おっぱい！ ⊂ミ ...","DisplayUrl":"dokoaa.com/mopa.html","Url":"http://dokoaa.com/mopa.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=4&$top=1","type":"WebResult"},"ID":"713e729b-acde-4edb-8774-38d7c90ac9b8","Title":"おっぱいおっぱいおっぱいおっぱいおっぱいおっぱいおっぱい ...","Description":"おっぱいおっぱいおっぱいおっぱいおっぱいおっぱいおっぱいおっぱいおっぱいおっぱいおっぱいおっ... ... 動画の説明文：全文を表示 おっぱいおっぱいおっぱいおっぱいおっぱいおっぱいおっぱいおっぱいおっぱい ...","DisplayUrl":"www.nicovideo.jp/watch/sm2233323","Url":"http://www.nicovideo.jp/watch/sm2233323"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=5&$top=1","type":"WebResult"},"ID":"a55ca4b1-de96-413b-91b4-3578041acfb2","Title":"この記事は存在しないか、すでに削除されています。","Description":"アンダー65なら普通にFはあるよ アンダー65のFって男が思う以上に普通レベルの乳 アンダー70のFなら巨乳って感じだが、この細さと胸の寄せ具合からして65だろうな","DisplayUrl":"alfalfalfa.com/archives/2975024.html","Url":"http://alfalfalfa.com/archives/2975024.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=6&$top=1","type":"WebResult"},"ID":"4363dd64-5f51-4e8e-8936-bbe2247f5892","Title":"「おっぱい」ブログ-1 | 記事一覧 | ウェブリブログ：機能充実の ...","Description":"「おっぱい」のテーマで書かれたブログ記事を最新順に表示します（1ページ目） | ウェブリブログは、NECビッグローブが運営するブログが無料で作成できるサービス。簡単操作でアフィリエイト支援、記事ごとのデザイン変更など ...","DisplayUrl":"webryblog.biglobe.ne.jp/8/3/83dfb3c760.html","Url":"http://webryblog.biglobe.ne.jp/8/3/83dfb3c760.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=7&$top=1","type":"WebResult"},"ID":"8b9430c4-143f-43c4-90a4-fdfe67a4c107","Title":"ワンフェス2011[冬] おっぱい！おっぱい！フィギュアのおっぱい ...","Description":"アキバBlogは、秋葉原の某ショップ元店長が、アキバ系のニュースをお伝えする、世界で一番「アキバ」な個人サイト ... ワンダーフェスティバル2011[冬]で見かけた「フィギュア」のおっぱいをお伝えする。ポロリやボ ...","DisplayUrl":"blog.livedoor.jp/geek/archives/51210621.html","Url":"http://blog.livedoor.jp/geek/archives/51210621.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=8&$top=1","type":"WebResult"},"ID":"e9fb3d1a-7c56-42d7-9caf-6a6d775bda50","Title":"( ﾟ∀ﾟ)o彡゜おっぱい！おっぱい！とは (オッパイオッパイとは ...","Description":"いちがつご～は～楽しい付録がおっぱいおっぱい！ 55 ： ななしのよっしん ：2012/06/13(水) 15:39:31 ID: /JeW+9tk4j ( ﾟ∀ﾟ)o彡ﾟお尻！お尻！ 56 ： ななしのよっしん ：2012/07/13(金) 23:16:41 ID ...","DisplayUrl":"dic.nicovideo.jp/a/%28%20%E3%82%9A%E2%88%80%E3%82%9A%29o...","Url":"http://dic.nicovideo.jp/a/%28%20%E3%82%9A%E2%88%80%E3%82%9A%29o%E5%BD%A1%E3%82%9A%E3%81%8A%E3%81%A3%E3%81%B1%E3%81%84%21%E3%81%8A%E3%81%A3%E3%81%B1%E3%81%84%21"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=9&$top=1","type":"WebResult"},"ID":"1e15a420-eb64-47b5-ab87-8645cfeee5dd","Title":"おっぱいとは - はてなキーワード","Description":"「おっぱい」とは - 一般に女性の胸部についているものであるが、それを指差して「君のおっぱい」「でかいおっぱい」などと言うことは日本では禁じられている。 大きさによってボイン、コイン、ナインなどと呼ばれる...","DisplayUrl":"d.hatena.ne.jp/keyword/%a4%aa%a4%c3%a4%d1%a4%a4","Url":"http://d.hatena.ne.jp/keyword/%a4%aa%a4%c3%a4%d1%a4%a4"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=10&$top=1","type":"WebResult"},"ID":"de73092d-7905-4a08-8b71-9a31339e9c41","Title":"Hi小学生おっぱい画像です！","Description":"小学生おっぱい画像です。 入り口クリック20才以下閲覧禁止 評論 おっぱいに関する私の持論をここで公開させてもらいます、お暇な方はぜひお読みください。 小学生の ...","DisplayUrl":"www4.point.ne.jp/~airpoo/oppai6.htm","Url":"http://www4.point.ne.jp/~airpoo/oppai6.htm"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=11&$top=1","type":"WebResult"},"ID":"7eca5157-13a2-416d-a734-fbd3d89276d1","Title":"おっぱい - 語源由来辞典","Description":"オッパイ（おっぱい）の意味・語源・由来を解説。 ... おっぱいの語源は、以下の通り諸説ある。 1．「ををうまい（おおうまい）」が約まったとする説。 2．「お腹一杯」の「いっぱい」が転じたとする説。","DisplayUrl":"gogen-allguide.com/o/oppai.html","Url":"http://gogen-allguide.com/o/oppai.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=12&$top=1","type":"WebResult"},"ID":"25ee75d0-21b2-4812-b81b-b2cf6f86009a","Title":"ς 摜 A ς B","Description":"ς 摜 A ς B $(document).ready(function() { // ܂ g b v ɖ Ă ܂ B $(\"#back-top\").hide(); // X N [ ꂽ $(window).scroll ...","DisplayUrl":"oppaisan.com","Url":"http://oppaisan.com/"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=13&$top=1","type":"WebResult"},"ID":"49308596-90b2-4a4b-ac8e-682799dca603","Title":"おっぱい視姦倶楽部","Description":"おっぱいをじっくり見つめてあげて女性を興奮させる女性向け風俗です！男性は1回おっぱいを見てあげるだけで3万円の報酬GET! ... おっぱい視姦倶楽部 巨乳も美乳も見放題 おっぱいを視姦して女性を感じさせ、謝礼が手に入る。","DisplayUrl":"op.d-viking.com","Url":"http://op.d-viking.com/"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=14&$top=1","type":"WebResult"},"ID":"48fd0265-7daf-4d4f-aa1e-cc82177ee63d","Title":"おっぱい、おっぱい、おっぱい - Yahoo!知恵袋","Description":"【ベストアンサー】おっぱい、おっぱい、おっぱい、おっぱい、おっぱい、おっぱい、おっぱい、おっぱい、おっぱい、おっぱい、おっぱい、おっぱい、おっぱい、おっぱい、おっぱい ...","DisplayUrl":"detail.chiebukuro.yahoo.co.jp/qa/question_detail/q1347248363","Url":"http://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q1347248363"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=15&$top=1","type":"WebResult"},"ID":"30a44606-1a19-4a67-92cc-547047880ccf","Title":"おっぱい or notおっぱい|Succubus-eyes","Description":"おっぱいかnotおっぱいかを瞬時に見分けるおっぱい判断力おっぱい仕分けおっぱいゲーム ... 「おっぱい」という文字が画面上部に表示された時におっぱいボタン、おっぱいじゃない文字が表示された時にnotおっぱいボタンを ...","DisplayUrl":"succubus-eyes.xii.jp/flash/opnop/index.html","Url":"http://succubus-eyes.xii.jp/flash/opnop/index.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=16&$top=1","type":"WebResult"},"ID":"afad9e61-1e69-4fa1-8d6d-12f6bf3c0203","Title":"( ﾟ∀ﾟ)彡 おっぱい！おっぱい！ - にくろぐ。","Description":"ﾑﾁｭﾒ1ヵ月半、興奮しまくって激しく首を振り振りしながら乳吸い中、口からすぽんと乳首が離れて 射乳中のおっぱいが顔に直撃。顔中乳まみれにしながらも必死なかおして吸い付いてくる。 あのぉ、乳首、痛いんでつけど・・・","DisplayUrl":"nikuch.blog42.fc2.com/blog-entry-450.html","Url":"http://nikuch.blog42.fc2.com/blog-entry-450.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=17&$top=1","type":"WebResult"},"ID":"470ba378-55a4-4c2a-8a44-766886afef2f","Title":"*-- おっぱいチラ好き --*","Description":"∟微乳,巨乳,スケぱい,モノクロなど大量画像 【おっぱい殿堂】 ∟おっぱい画像大量 【おっぱいマニア】 ∟直リンだが細かいおっぱいジャンル別けされてる 【おっぱい画像集】 ∟おっぱい板とおっぱい画像掲示板 【ナマ乳さわり ...","DisplayUrl":"ads.kir.jp/tira.html","Url":"http://ads.kir.jp/tira.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=18&$top=1","type":"WebResult"},"ID":"65ef0b88-7527-42e7-a2ed-49b50e3b1cbc","Title":"eSampo | ふわふわおっぱい体操","Description":"神藤多喜子さんが提唱する「おっぱい体操」のやり方。バストアップだけでなく、重い生理痛や肩こりの改善、美肌効果も期待できます。「ホンマでっかTV」や「Oh！どや顔サミット」などテレビや雑誌でも話題沸騰中！","DisplayUrl":"www.esampo.com/beauty/selfcare/vol31","Url":"http://www.esampo.com/beauty/selfcare/vol31/"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=19&$top=1","type":"WebResult"},"ID":"8c854376-0fe2-4dd0-abe7-7ae0464abd71","Title":"おっぱいのプロフィール","Description":"おっぱいのプロフィール、音楽、写真、動画、BBS、ブログを公開中 ... 最新のなう 大晦日の深夜…それって既に元旦だけど、MXが面白そうだ！真の場末のママを競う「おママ対抗歌合戦」！","DisplayUrl":"profile.ameba.jp/kenkenhigh","Url":"http://profile.ameba.jp/kenkenhigh/"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=20&$top=1","type":"WebResult"},"ID":"b0fe890b-1470-45ee-bbac-291d2dd05244","Title":"おっぱいがいっぱい","Description":"ぼくがのんで いもうとものんだのに ちっちゃくならない ママのおっぱい おふろのなかで さわらせてもらったら 空気たりない ゴムマリみたい ぼくがのんで いもうとものんだから おっぱいがでない ママのおっぱい","DisplayUrl":"www.mahoroba.ne.jp/~gonbe007/hog/shouka/oppaigaippai.html","Url":"http://www.mahoroba.ne.jp/~gonbe007/hog/shouka/oppaigaippai.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=21&$top=1","type":"WebResult"},"ID":"e616f5f8-e370-444d-9c18-b0dc25d91d41","Title":"「おっぱい」/「まさみティー」のイラスト [pixiv]","Description":"pixivに投稿された「まさみティー」のイラストです。 「おっぱい」","DisplayUrl":"www.pixiv.net/member_illust.php?mode=medium&illust_id=...","Url":"http://www.pixiv.net/member_illust.php?mode=medium&illust_id=12407715"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=22&$top=1","type":"WebResult"},"ID":"0a56d2c9-d719-4e15-8936-b7026dc94e83","Title":"おっぱい小説 - Yahoo!ブログ","Description":"わたしはおっぱいが自慢なんだけど、 もともと大きかったんじゃなくて男に揉まれて大きくなったんです＾＾； 前のカレシが変態だったので恥ずかしいこといっぱいされたんですよね＾ー＾； それでこんな体になっちゃったww","DisplayUrl":"blogs.yahoo.co.jp/inoburobm","Url":"http://blogs.yahoo.co.jp/inoburobm"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=23&$top=1","type":"WebResult"},"ID":"3a917f92-9f02-452b-b539-f2c12c00b2f7","Title":"おっぱい！ - Yahoo!知恵袋","Description":"【ベストアンサー】文化祭に限らず、僕のモットーは「しゃがんでいる女と前かがみになっている女を見逃すな」ですw いこのモットーを常に忘れなければ、今でもしょっちゅう良いモノが ...","DisplayUrl":"detail.chiebukuro.yahoo.co.jp/qa/question_detail/q1243617577","Url":"http://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q1243617577"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=24&$top=1","type":"WebResult"},"ID":"6a5ee8cd-96fa-4985-b954-2a064fe4909d","Title":"おっぱい画像掲示板","Description":"巡回用 画像掲示板コレクション","DisplayUrl":"www.ss.iij4u.or.jp/~bbs/pai/index5.html","Url":"http://www.ss.iij4u.or.jp/~bbs/pai/index5.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=25&$top=1","type":"WebResult"},"ID":"bd704d0c-fd69-4825-9e59-b8e428f50084","Title":"DMMアダルト [ぷにゅぷにゅ おっぱい特集] DVD通販","Description":"おっぱい好き集まれ～！揉む、舐める、吸う、挟む、揺らすなど、あなたをフェチの楽園へと誘う作品をDVD通販で紹介！ ... 商品は中身がわからないよう、無地の箱でお届けします。送付状の表記も6種類からお選び ...","DisplayUrl":"www.dmm.co.jp/mono/dvd/special/oppai_html/=/ch_navi=","Url":"http://www.dmm.co.jp/mono/dvd/special/oppai_html/=/ch_navi=/"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=26&$top=1","type":"WebResult"},"ID":"af909625-5645-4da0-b886-71813c2a8891","Title":"おっぱいサンプル集 | 無料動画：So-netブログ","Description":"『おっぱい』に関する無料動画サンプル情報満載！毎日更新！初心者でもすぐダウンロードできるアダルト動画専門ブログです。 ... おっぱいサンプル集 | 無料動画 『おっぱい』に関する無料動画サンプル情報満載！毎日更新！","DisplayUrl":"oppai-movie.blog.so-net.ne.jp","Url":"http://oppai-movie.blog.so-net.ne.jp/"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=27&$top=1","type":"WebResult"},"ID":"8cff8c13-7084-4e8c-9cca-d55094aeca5e","Title":"おっぱい : \"SUNSEA\" DIARY","Description":"6月、第3日曜日は… さてさて、なーんの日？おっぱいの日〜！！！！！！！またの名を…チチの日〜！！！！2つのおっぱいに… ちがうちがう！2人のチチに… プレゼント〜 2人のチチ、いつまでも元気でいてください","DisplayUrl":"sunsea34.exblog.jp/i12","Url":"http://sunsea34.exblog.jp/i12/"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=28&$top=1","type":"WebResult"},"ID":"72c05d7a-adbf-4d4a-ad6c-671f2dd45d77","Title":"「世紀末オカルト学院」のおっぱいが、おっぱいおっぱい過ぎて ...","Description":"一介の映画好き、音楽好きが、ユルユルと思ったことを日々書きつけるblogです。US HARDCORE、UK NEW WAVE、映画・アニメなどの映像作品についての記述が多め。 ... [anime]「世紀末オカルト学院」のおっぱいが ...","DisplayUrl":"d.hatena.ne.jp/tunderealrovski/20100811/p2","Url":"http://d.hatena.ne.jp/tunderealrovski/20100811/p2"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=29&$top=1","type":"WebResult"},"ID":"7692c0f4-fad3-426c-9042-db70e044468c","Title":"おっぱいバレー : 作品情報 - 映画.com","Description":"おっぱいバレーの作品情報。上映スケジュール、映画レビュー、予告動画。1979年、北九州市。中学校の弱小男子バレー部の顧問になった新任教師の美香子は、やる気のない部員たちに「試合に勝っ...","DisplayUrl":"eiga.com/movie/53932","Url":"http://eiga.com/movie/53932/"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=30&$top=1","type":"WebResult"},"ID":"600e6db5-9864-4d43-a676-4f759c4aa543","Title":"おっぱい＆ミルク：育児情報ひろば！｜株式会社 明治","Description":"おっぱい＆ミルク:初乳はとても大切です,おっぱいとママの体は密接な関係,おっぱいの上手な飲ませ方 ... 赤ちゃんが生まれて、2～3日目に出る濃い黄色のおっぱいを初乳といいます。 初乳の中には、病気に対する免疫物質が ...","DisplayUrl":"www.meiji-hohoemi.com/baby/oppaimilk/oppaimilk1.html","Url":"http://www.meiji-hohoemi.com/baby/oppaimilk/oppaimilk1.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=31&$top=1","type":"WebResult"},"ID":"3e7ba142-dc81-4b43-8fa0-d0071380995e","Title":"おっぱいTシャツ(乳Tシャツ)","Description":"エロ書道をテーマに書き続けます。 ... おっぱいTシャツ(乳Tシャツ) エロ書道をテーマに書き続けます。 プロフィーゥ Author:ちんねん 花園大学書道コース卒業","DisplayUrl":"ramo3masa3.blog22.fc2.com","Url":"http://ramo3masa3.blog22.fc2.com/"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=32&$top=1","type":"WebResult"},"ID":"2b325516-8d07-4a27-b723-90f79683d9f4","Title":"おっぱい - FruitMail 動画検索","Description":"おっぱいの無料動画、無料動画が見つかる 世界中の動画からおっぱいの動画を探すなら動画検索サイトWoopie(ウーピー)、関連動画、お気に入り動画、チャンネル（動画集）など他のサイトでは見つけられなかったおっぱいを探す ...","DisplayUrl":"fruitmail.ptn.woopie.jp/search?kw=おっぱい&page=17","Url":"http://fruitmail.ptn.woopie.jp/search?kw=%E3%81%8A%E3%81%A3%E3%81%B1%E3%81%84&page=17"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=33&$top=1","type":"WebResult"},"ID":"356ba327-0af9-4130-8935-b9e687e55ba5","Title":"( ﾟ∀ﾟ)彡 おっぱい！おっぱい！ 2ﾊﾟｲ目: 育児板拾い読み ...","Description":"( ﾟ∀ﾟ)彡 おっぱい！おっぱい！ 2ﾊﾟｲ目,2ちゃんねるから、育児・家族・結婚・恋愛・ペットをキーワードに各板から。 ... 3 名前： 名無しの心子知らず [sage] 投稿日： 2005/07/26(火) 01:14:01 ID:AkXtUSmb 3ヶ月の息子。 ...","DisplayUrl":"ikuzi.seesaa.net/article/11967010.html","Url":"http://ikuzi.seesaa.net/article/11967010.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=34&$top=1","type":"WebResult"},"ID":"844117b4-9ee7-405e-b837-61079c4f5123","Title":"おっぱいバレー - Wikipedia","Description":"おっぱいバレー 』は、 水野宗徳 の 小説 。2009年に同名で映画化された。 作品の舞台は 静岡県 引佐郡 三ケ日町 （現： 浜松市 北区","DisplayUrl":"ja.wikipedia.org/wiki/おっぱいバレー","Url":"http://ja.wikipedia.org/wiki/%E3%81%8A%E3%81%A3%E3%81%B1%E3%81%84%E3%83%90%E3%83%AC%E3%83%BC"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=35&$top=1","type":"WebResult"},"ID":"e607d0c7-0c80-480b-81d3-d563aa20c827","Title":"おっぱい 無料サンプルAV動画検索 無料サンプルAVサーチ","Description":"おっぱいの無料サンプル動画を検索できるページです。 ... このむちむちおっぱいにまみれ溺れなさい！！エロ過ぎる巨乳！！足をも飲み込む巨乳！巨乳でバナナをクラッシュ！","DisplayUrl":"dash.kir.jp/sample_search/search.php?c=31","Url":"http://dash.kir.jp/sample_search/search.php?c=31"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=36&$top=1","type":"WebResult"},"ID":"07ac8aec-6a9a-4b4d-8874-e96f71de4700","Title":"光市／おっぱい育児","Description":"おっぱい育児 「おっぱい都市宣言」に関する決議 私たちは、おっぱいをとおして、“母と子と父そして人にやさしいまち光”をつくります。 私たちは、おっぱいという胸のぬくもりの中で、子どもをしっかりと抱き、愛しみ、心豊かで ...","DisplayUrl":"www.city.hikari.lg.jp/kenkou/opp_01.html","Url":"http://www.city.hikari.lg.jp/kenkou/opp_01.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=37&$top=1","type":"WebResult"},"ID":"113c8f46-8f0c-48ee-a97e-82a21c165aec","Title":"秋葉原駅前で「おっぱい」路上撮影会 - アキバBlog","Description":"結月里奈（ゆづきりな）さんが、秋葉原駅前でDVD告知をやっていた。結月里奈さんは身長160センチ・バスト86センチの女性。チラシ・名刺はすぐになくなり、「おっぱい撮影会」になっていた。","DisplayUrl":"www.akibablog.net/archives/2007/07/rina-070708.html","Url":"http://www.akibablog.net/archives/2007/07/rina-070708.html"},{"__metadata":{"uri":"https://api.datamarket.azure.com/Data.ashx/Bing/Search/Web?Query=\u0027おっぱい\u0027&$skip=38&$top=1","type":"WebResult"},"ID":"fdb956c4-867c-48bd-9904-6f1918398599","Title":"おっぱいメロン","Description":"【サイズ】片乳の横幅約10cm 重量、両方合わせて約1kg強 【付属品】ミニローション 【匂い】弱い 【べとつき ... ボリュームも柔らかさも文句なし！パイズリ目当ての方はGETして下さい おっぱい担当の佐藤店員が ...","DisplayUrl":"www.hotpowers.jp/goods/1-270.html","Url":"http://www.hotpowers.jp/goods/1-270.html"}]}}';
	}

}
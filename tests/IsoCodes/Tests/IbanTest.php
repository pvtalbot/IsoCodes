<?php

namespace IsoCodes\Tests;

use IsoCodes\Iban;

/**
 * IbanTest
 *
 * @covers Isocodes\Iban
 */
class IbanTest extends \PHPUnit_Framework_TestCase
{

    /**
     * getValidIbans: dataprovider
     *
     * @return array
     */
    public function getValidIbans()
    {
        return array(

            // source: http://www.mobilefish.com/download/iban/random_generated_iban.txt
            array('AL86751639367318444714198669'),
            array('AL89515635252277023782748302'),
            array('AL39153296222641598198140883'),
            array('AL47907501989147671525950076'),
            array('AL55398719849655505231753964'),
            array('AD2531377125214715353449'),
            array('AD9764782778017799549345'),
            array('AD4079739934060166934190'),
            array('AD3210446914824799260335'),
            array('AD1781438353588817727122'),
            array('AT582774098454337653'),
            array('AT220332087576467472'),
            array('AT328650112318219886'),
            array('AT193357281080332578'),
            array('AT535755326448639816'),
            array('BE16517682243567'),
            array('BE46943937718104'),
            array('BE75270187592710'),
            array('BE58465045170210'),
            array('BE49149522496291'),
            array('BA534130469841865537'),
            array('BA515388988295860588'),
            array('BA182655808222815318'),
            array('BA105531662061034080'),
            array('BA198940842595891985'),
            array('BG08NXYF73308507056085'),
            array('BG22OOPG05631394112384'),
            array('BG30XCMJ43923350257238'),
            array('BG66ZKSV96204746173581'),
            array('BG62TOZJ59790808155256'),
            array('HR9118658081801951861'),
            array('HR7093391174762888131'),
            array('HR6824554207539191367'),
            array('HR7069604594001692768'),
            array('HR4270163171014341308'),
            array('CY48590776872388131193566182'),
            array('CY57511427289148815512463528'),
            array('CY10469623011747193079305488'),
            array('CY86826022479357551507194222'),
            array('CY65139035183710553510799793'),
            array('CZ3740083988228867633610'),
            array('CZ4923390395798905071131'),
            array('CZ3697747307026104738861'),
            array('CZ5061223246730267064210'),
            array('CZ3638452806288471256750'),
            array('DK8387188644726815'),
            array('DK3068706775436067'),
            array('DK0697654450063121'),
            array('DK1099979861456738'),
            array('DK6988299842527195'),
            array('EE416702219844182076'),
            array('EE816382882633746409'),
            array('EE035815981173988529'),
            array('EE150595733987082728'),
            array('EE605409451030627522'),
            array('FO1593707486505366'),
            array('FO5006907768039839'),
            array('FO9378537341306148'),
            array('FO4068759083981752'),
            array('FO0905894981715676'),
            array('FI8709549333658747'),
            array('FI1518471099159022'),
            array('FI0589161476500751'),
            array('FI8433982173935580'),
            array('FI7954405150189238'),
            array('FR4197944644738285027717680'),
            array('FR9476231310567227640169067'),
            array('FR6888474339535547405026268'),
            array('FR3007344050937354660134854'),
            array('FR8547764510959591053030050'),
            array('PF8169352568136984283973639'),
            array('PF1021725003919279759512045'),
            array('PF9067348885442846702112667'),
            array('PF2110055440192380776287331'),
            array('PF4462138104308037716665461'),
            array('TF7369356610212036082878842'),
            array('TF1699071511365858327828309'),
            array('TF9287657455706592772258930'),
            array('TF6983084059527026532259346'),
            array('TF6320136548014311655407753'),
            array('DE06495352657836424132'),
            array('DE09121688720378475751'),
            array('DE88516399675378845887'),
            array('DE42187384985716759572'),
            array('DE04399340668928275395'),
            array('GI84YQVE742322843673354'),
            array('GI50TRZE832226672231136'),
            array('GI96DQBV940980418323607'),
            array('GI12MTEJ300936244995281'),
            array('GI50NKEA869461619367593'),
            array('GE27JX0363248286073573'),
            array('GE95PE2036699405919650'),
            array('GE86WI1894058889642409'),
            array('GE50ZK0956993434292828'),
            array('GE60VX8276008964044900'),
            array('GR8206922880502260960449182'),
            array('GR0708312360607104632724143'),
            array('GR3019549951345337224826989'),
            array('GR1850333105485787816165828'),
            array('GR3328425960116597801941217'),
            array('GL3357098231928641'),
            array('GL7672801402871438'),
            array('GL8576657033000228'),
            array('GL7533425696727320'),
            array('GL3145184332080211'),
            array('HU53165228954563006441576439'),
            array('HU61442178338678431742505774'),
            array('HU64774233934011029174507108'),
            array('HU79689064758089616754511009'),
            array('HU60873329200412252359645504'),
            array('IS098954934397185843549690'),
            array('IS367580035808668402924142'),
            array('IS179684724271989278617740'),
            array('IS846240236716627404368872'),
            array('IS521951362135843206164749'),
            array('IE49BENI35972029450251'),
            array('IE37OGUG54280567980573'),
            array('IE43DCUZ91231044680662'),
            array('IE15AAKO11199097933967'),
            array('IE77PIHS49175290558839'),
            array('IL454322198734138455151'),
            array('IL839799606658366056087'),
            array('IL038569613554041996868'),
            array('IL813919026399312117293'),
            array('IL654645042217944600527'),
            array('IT85M5508898545109326040966'),
            array('IT52G4674641537627600627273'),
            array('IT54K9621595703270001697912'),
            array('IT02F7240326523239438656917'),
            array('IT75F6444007486118207984348'),
            array('LV85QMUO0600628590552'),
            array('LV06FYUQ8115346663782'),
            array('LV05OXNQ0057259369767'),
            array('LV22XGHZ6356462010762'),
            array('LV27LLIK8896580861638'),
            array('LB82586807590631203627574587'),
            array('LB33405622563828555835796785'),
            array('LB04715710805951055803616185'),
            array('LB61420797023022242826619522'),
            array('LB67864629408749872547678117'),
            array('LI4091221689235313176'),
            array('LI7615336074136062084'),
            array('LI3727301137968672218'),
            array('LI3551318446915634574'),
            array('LI4705272204109186337'),
            array('LT369967216439021801'),
            array('LT937444321684957069'),
            array('LT424971109068400772'),
            array('LT566572547785167976'),
            array('LT344806290778854389'),
            array('LU292357816107922497'),
            array('LU184883493877746720'),
            array('LU850789684146586224'),
            array('LU365548629753608759'),
            array('LU954093702688849179'),
            array('MK72125600332161582'),
            array('MK11033425562019483'),
            array('MK28337919411434742'),
            array('MK22345789402386151'),
            array('MK82644233974800672'),
            array('MT97ATVB58306859106316239974172'),
            array('MT74VCFO64435204415027820548935'),
            array('MT35ITGC82712389863518284695353'),
            array('MT68DQVR03392795978045273628339'),
            array('MT29SUTJ80635803074721583494800'),
            array('MU51SJFJ6257989899845328236GLS'),
            array('MU61KWPF5078030841109086598WUO'),
            array('MU53JZOY7025842098740945151ZDV'),
            array('MU33GHPP0512367410476524003SGD'),
            array('MU47IDNI5979337138037202943JSF'),
            array('YT2364450161155207655772895'),
            array('YT5387838908762423789181088'),
            array('YT5732176546694896615831590'),
            array('YT9824037454721994164038623'),
            array('YT2841514046462334743686132'),
            array('MC7310021462396304214555821'),
            array('MC7426943447019580313912629'),
            array('MC5828214954205338889828744'),
            array('MC5492313829455176982975920'),
            array('MC9281452662355894512310924'),
            array('ME60043032533135219382'),
            array('ME13188638660227646081'),
            array('ME82608318996043837340'),
            array('ME15121909794401990976'),
            array('ME76417412116089156198'),
            array('NL23CGPQ0251595242'),
            array('NL21FPBW0870850199'),
            array('NL15TVWK0331902885'),
            array('NL13RTEF0518590011'),
            array('NL40SGFW1252215983'),
            array('NC9532788614647022310269396'),
            array('NC2053292379717332255189037'),
            array('NC9105701404726570049169877'),
            array('NC1021801619496974025318651'),
            array('NC1729434258559239166499130'),
            array('NO5384279272034'),
            array('NO9739077211102'),
            array('NO7009234138626'),
            array('NO4448361377130'),
            array('NO7962522169141'),
            array('PL58515427093787930748060666'),
            array('PL22980511341176988398762666'),
            array('PL08239642036391620641611736'),
            array('PL67449258602191338152126294'),
            array('PL82771306277364889467742211'),
            array('PT12014625392693045083592'),
            array('PT80898047569635824751698'),
            array('PT12065330847682220414039'),
            array('PT98681708278396096913836'),
            array('PT49242951581988705914025'),
            array('RO14JLFB9551925334163469'),
            array('RO81QBBE5290470985636122'),
            array('RO11VYHO3215271561449480'),
            array('RO57EAOP2023783320803714'),
            array('RO21HNFU2813681045796465'),
            array('PM8059411251360674293481450'),
            array('PM5203212193960732379060042'),
            array('PM7466602890486264340672969'),
            array('PM6367055534424386034425612'),
            array('PM2060260873302215070303208'),
            array('SM70N8724751165335491824812'),
            array('SM78X1135489836211118891839'),
            array('SM97M4888143036388138800185'),
            array('SM72C9584723533916792029340'),
            array('SM90M9981908196491432695525'),
            array('SA5591720552379162070001'),
            array('SA0545544944406431392597'),
            array('SA1667630781004847967711'),
            array('SA2589813740329129166910'),
            array('SA7081962486570441251637'),
            array('RS85033307149788542871'),
            array('RS52665698845368481211'),
            array('RS82691654340096587307'),
            array('RS88844660406878687897'),
            array('RS55472917853273859291'),
            array('SK4167111421162529673536'),
            array('SK4589732621505695319336'),
            array('SK4492457066924445710519'),
            array('SK9190300791649333346556'),
            array('SK6835978956449243145407'),
            array('SI26085198624502816'),
            array('SI85363467889027196'),
            array('SI93016808632808860'),
            array('SI45000543512611896'),
            array('SI14647150971707561'),
            array('ES2364265841767173822054'),
            array('ES5577644480024527929849'),
            array('ES7502766977729557202723'),
            array('ES3282395478259622275430'),
            array('ES9034258324029250165663'),
            array('SE3159169406714737443256'),
            array('SE2636432381651868407029'),
            array('SE3280552515152942260664'),
            array('SE7905464316022155413548'),
            array('SE8953084170161031273426'),
            array('CH1987364322975299818'),
            array('CH4269286867620396437'),
            array('CH2296292579429731980'),
            array('CH6518929919723772608'),
            array('CH9093021641139942126'),
            array('TN9670288139885457943736'),
            array('TN8738524364626879391407'),
            array('TN7275949269046889239714'),
            array('TN4006837077003057397517'),
            array('TN8683931110271287238460'),
            array('TR493318798613751080384953'),
            array('TR314256533622834177853745'),
            array('TR080572402207758013538147'),
            array('TR489116538521358266645727'),
            array('TR795585070398853758044433'),
            array('GB39MUJS50172570996370'),
            array('GB14SIPV86193224493527'),
            array('GB55ZAFY89851748597528'),
            array('GB22KVUM18028477988401'),
            array('GB26JAYK66540091518150'),
            array('WF5664222423044623595985593'),
            array('WF6125565335534356679570561'),
            array('WF4041383920092945092359281'),
            array('WF0721812715683400832634716'),
            array('WF6876262234744814330049391'),

            // valid IBANs from standard-documents found at www.ecbs.org (all OK):
            array('AD1200012030200359100100'),
            array('AT611904300234573201'),
            array('BA391290079401028494'),
            array('BE68539007547034'),
            array('BE43068999999501'),
            array('BG80BNBG96611020345678'),
            array('CH9300762011623852957'),
            array('CY17002001280000001200527600'),
            array('CZ6508000000192000145399'),
            array('DE89370400440532013000'),
            array('DK5000400440116243'),
            array('EE382200221020145685'),
            array('ES9121000418450200051332'),
            array('FR1420041010050500013M02606'),
            array('FI2112345600000785'),
            array('GB29NWBK60161331926819'),
            array('GI75NWBK000000007099453'),
            array('GR1601101250000000012300695'),
            array('HR1210010051863000160'),
            array('HU42117730161111101800000000'),
            array('IE29AIBK93115212345678'),
            array('IL620108000000099999999'),
            array('IS140159260076545510730339'),
            array('IT60X0542811101000000123456'),
            array('LI21088100002324013AA'),
            array('LT121000011101001000'),
            array('LU280019400644750000'),
            array('LV80BANK0000435195001'),
            array('MC1112739000700011111000H79'),
            array('ME25505000012345678951'),
            array('MK07250120000058984'),
            array('MT84MALT011000012345MTLCAST001S'),
            array('MU17BOMM0101101030300200000MUR'),
            array('NL91ABNA0417164300'),
            array('NO9386011117947'),
            array('PL61109010140000071219812874'),
            array('PT50000201231234567890154'),
            array('RO49AAAA1B31007593840000'),
            array('RS35260005601001611379'),
            // SE1212312345678901234561
            // mentioned in the documents from www.ecbs.org
            // but does not validate correctly (checksum)
            // needs to be:
            array('SE9412312345678901234561'),
            array('SI56191000000123438'),
            array('SK3112000000198742637541'),
            array('SM86U0322509800000000270100'),
            array('TN5914207207100707129648'),
            array('TR330006100519786457841326'),
        );
    }

    /**
     * getInvalidIbans: dataprovider
     *
     * @return array
     */
    public function getInvalidIbans()
    {
        return array(
            array('15459 45000 0411700920U 62'),
            array('10207000260402601177084'),
            array('DE6070051755000000722'),
            array('DE10002300A1023502601'),
            array('PL12100500000123456789'),
            array(''),
            array(' '),
            array(null)
        );
    }

    /**
     * testValidIban
     *
     * @param string $iban
     *
     * @dataProvider getValidIbans
     *
     * @return void
     */
    public function testValidIban($iban)
    {
        $this->assertTrue(Iban::validate($iban));
    }

    /**
     * testInvalidIban
     *
     * @param string $iban
     *
     * @dataProvider getInvalidIbans
     *
     * @return void
     */
    public function testInvalidIban($iban)
    {
        $this->assertFalse(Iban::validate($iban));
    }

    protected function setUp()
    {
        parent::setUp();
    }
}

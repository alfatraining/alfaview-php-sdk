<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: roomService/roomService.proto

namespace GPBMetadata\RoomService;

class RoomService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common\AccessInfo::initOnce();
        \GPBMetadata\Common\ReplyInfo::initOnce();
        \GPBMetadata\Common\Room::initOnce();
        \GPBMetadata\Common\Permissions::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acc160a1d726f6f6d536572766963652f726f6f6d536572766963652e70" .
            "726f746f120b726f6f6d536572766963651a16636f6d6d6f6e2f7265706c" .
            "79496e666f2e70726f746f1a11636f6d6d6f6e2f726f6f6d2e70726f746f" .
            "1a18636f6d6d6f6e2f7065726d697373696f6e732e70726f746f1a1c676f" .
            "6f676c652f6170692f616e6e6f746174696f6e732e70726f746f224f0a15" .
            "4372656174654a6f696e4c696e6b5265717565737412260a0a6163636573" .
            "73496e666f18012001280b32122e636f6d6d6f6e2e416363657373496e66" .
            "6f120e0a06726f6f6d4964180c20012809224d0a134372656174654a6f69" .
            "6e4c696e6b5265706c7912240a097265706c79496e666f18012001280b32" .
            "112e636f6d6d6f6e2e5265706c79496e666f12100a086a6f696e4c696e6b" .
            "180e2001280922600a16526f6f6d5065726d697373696f6e735265717565" .
            "737412260a0a616363657373496e666f18012001280b32122e636f6d6d6f" .
            "6e2e416363657373496e666f120e0a06757365724964180b20012809120e" .
            "0a06726f6f6d4964180c2001280922660a14526f6f6d5065726d69737369" .
            "6f6e735265706c7912240a097265706c79496e666f18012001280b32112e" .
            "636f6d6d6f6e2e5265706c79496e666f12280a0b7065726d697373696f6e" .
            "73180d2001280b32132e636f6d6d6f6e2e5065726d697373696f6e73224c" .
            "0a11526f6f6d5374617475735265717565737412260a0a61636365737349" .
            "6e666f18012001280b32122e636f6d6d6f6e2e416363657373496e666f12" .
            "0f0a07726f6f6d496473180d2003280922b4010a0f526f6f6d5374617475" .
            "735265706c7912240a097265706c79496e666f18012001280b32112e636f" .
            "6d6d6f6e2e5265706c79496e666f12360a05726f6f6d73180e2003280b32" .
            "272e726f6f6d536572766963652e526f6f6d5374617475735265706c792e" .
            "526f6f6d73456e7472791a430a0a526f6f6d73456e747279120b0a036b65" .
            "7918012001280912240a0576616c756518022001280b32152e726f6f6d53" .
            "6572766963652e526f6f6d496e666f3a0238012280010a08526f6f6d496e" .
            "666f122f0a057573657273180f2003280b32202e726f6f6d536572766963" .
            "652e526f6f6d496e666f2e5573657273456e7472791a430a0a5573657273" .
            "456e747279120b0a036b657918012001280912240a0576616c7565180220" .
            "01280b32152e726f6f6d536572766963652e55736572496e666f3a023801" .
            "221a0a0855736572496e666f120e0a066f6e6c696e651801200128082257" .
            "0a11526f6f6d4372656174655265717565737412260a0a61636365737349" .
            "6e666f18012001280b32122e636f6d6d6f6e2e416363657373496e666f12" .
            "1a0a04726f6f6d18062001280b320c2e636f6d6d6f6e2e526f6f6d22630a" .
            "0f526f6f6d4372656174655265706c7912240a097265706c79496e666f18" .
            "012001280b32112e636f6d6d6f6e2e5265706c79496e666f120e0a06726f" .
            "6f6d4964180c20012809121a0a04726f6f6d18062001280b320c2e636f6d" .
            "6d6f6e2e526f6f6d226f0a0f526f6f6d4c6973745265717565737412260a" .
            "0a616363657373496e666f18012001280b32122e636f6d6d6f6e2e416363" .
            "657373496e666f120d0a056c696d6974180d2001280d120e0a066f666673" .
            "6574180e2001280d12150a0d66696c746572526f6f6d4964731832200328" .
            "0922a7010a0d526f6f6d4c6973745265706c7912240a097265706c79496e" .
            "666f18012001280b32112e636f6d6d6f6e2e5265706c79496e666f12340a" .
            "05726f6f6d7318072003280b32252e726f6f6d536572766963652e526f6f" .
            "6d4c6973745265706c792e526f6f6d73456e7472791a3a0a0a526f6f6d73" .
            "456e747279120b0a036b6579180120012809121b0a0576616c7565180220" .
            "01280b320c2e636f6d6d6f6e2e526f6f6d3a023801224c0a12526f6f6d44" .
            "657374726f795265717565737412260a0a616363657373496e666f180120" .
            "01280b32122e636f6d6d6f6e2e416363657373496e666f120e0a06726f6f" .
            "6d496418052001280922380a10526f6f6d44657374726f795265706c7912" .
            "240a097265706c79496e666f18012001280b32112e636f6d6d6f6e2e5265" .
            "706c79496e666f2289010a11526f6f6d5570646174655265717565737412" .
            "260a0a616363657373496e666f18012001280b32122e636f6d6d6f6e2e41" .
            "6363657373496e666f120e0a06726f6f6d4964180520012809121a0a0472" .
            "6f6f6d18062001280b320c2e636f6d6d6f6e2e526f6f6d12200a1872656d" .
            "6f766544656661756c745065726d697373696f6e7318072001280822370a" .
            "0f526f6f6d5570646174655265706c7912240a097265706c79496e666f18" .
            "012001280b32112e636f6d6d6f6e2e5265706c79496e666f22730a12526f" .
            "6f6d735570646174655265717565737412260a0a616363657373496e666f" .
            "18012001280b32122e636f6d6d6f6e2e416363657373496e666f12350a0d" .
            "726f6f6d73546f55706461746518022003280b321e2e726f6f6d53657276" .
            "6963652e526f6f6d5570646174655265717565737422ca010a10526f6f6d" .
            "735570646174655265706c7912240a097265706c79496e666f1801200128" .
            "0b32112e636f6d6d6f6e2e5265706c79496e666f12470a0d757064617465" .
            "5265706c69657318022003280b32302e726f6f6d536572766963652e526f" .
            "6f6d735570646174655265706c792e5570646174655265706c696573456e" .
            "7472791a470a125570646174655265706c696573456e747279120b0a036b" .
            "657918012001280912200a0576616c756518022001280b32112e636f6d6d" .
            "6f6e2e5265706c79496e666f3a02380132a1060a0b726f6f6d5365727669" .
            "6365125a0a06437265617465121e2e726f6f6d536572766963652e526f6f" .
            "6d437265617465526571756573741a1c2e726f6f6d536572766963652e52" .
            "6f6f6d4372656174655265706c79221282d3e493020c22072f6372656174" .
            "653a012a125a0a06557064617465121e2e726f6f6d536572766963652e52" .
            "6f6f6d557064617465526571756573741a1c2e726f6f6d53657276696365" .
            "2e526f6f6d5570646174655265706c79221282d3e493020c22072f757064" .
            "6174653a012a12660a0b557064617465526f6f6d73121f2e726f6f6d5365" .
            "72766963652e526f6f6d73557064617465526571756573741a1d2e726f6f" .
            "6d536572766963652e526f6f6d735570646174655265706c79221782d3e4" .
            "930211220c2f757064617465526f6f6d733a012a12520a044c697374121c" .
            "2e726f6f6d536572766963652e526f6f6d4c697374526571756573741a1a" .
            "2e726f6f6d536572766963652e526f6f6d4c6973745265706c79221082d3" .
            "e493020a22052f6c6973743a012a125e0a0744657374726f79121f2e726f" .
            "6f6d536572766963652e526f6f6d44657374726f79526571756573741a1d" .
            "2e726f6f6d536572766963652e526f6f6d44657374726f795265706c7922" .
            "1382d3e493020d22082f64657374726f793a012a125a0a06537461747573" .
            "121e2e726f6f6d536572766963652e526f6f6d5374617475735265717565" .
            "73741a1c2e726f6f6d536572766963652e526f6f6d537461747573526570" .
            "6c79221282d3e493020c22072f7374617475733a012a126e0a0b5065726d" .
            "697373696f6e7312232e726f6f6d536572766963652e526f6f6d5065726d" .
            "697373696f6e73526571756573741a212e726f6f6d536572766963652e52" .
            "6f6f6d5065726d697373696f6e735265706c79221782d3e4930211220c2f" .
            "7065726d697373696f6e733a012a12720a0e4372656174654a6f696e4c69" .
            "6e6b12222e726f6f6d536572766963652e4372656174654a6f696e4c696e" .
            "6b526571756573741a202e726f6f6d536572766963652e4372656174654a" .
            "6f696e4c696e6b5265706c79221a82d3e4930214220f2f6372656174654a" .
            "6f696e4c696e6b3a012a4219ca0216416c6661747261696e696e675c4772" .
            "70635c526f6f6d620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}


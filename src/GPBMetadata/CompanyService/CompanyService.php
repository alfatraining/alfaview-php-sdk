<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: companyService/companyService.proto

namespace GPBMetadata\CompanyService;

class CompanyService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common\AccessInfo::initOnce();
        \GPBMetadata\Common\ReplyInfo::initOnce();
        \GPBMetadata\Common\Company::initOnce();
        \GPBMetadata\User\UserService::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afe0c0a23636f6d70616e79536572766963652f636f6d70616e79536572" .
            "766963652e70726f746f120e636f6d70616e79536572766963651a16636f" .
            "6d6d6f6e2f7265706c79496e666f2e70726f746f1a14636f6d6d6f6e2f63" .
            "6f6d70616e792e70726f746f1a16757365722f7573657253657276696365" .
            "2e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e73" .
            "2e70726f746f22790a12436f6d70616e794c697374526571756573741226" .
            "0a0a616363657373496e666f18012001280b32122e636f6d6d6f6e2e4163" .
            "63657373496e666f12150a0d636f6d70616e7949644c6973741802200328" .
            "0912150a0d636f6d70616e79496446726f6d180320012809120d0a056c69" .
            "6d697418042001280d22da010a10436f6d70616e794c6973745265706c79" .
            "12240a097265706c79496e666f18012001280b32112e636f6d6d6f6e2e52" .
            "65706c79496e666f12420a09636f6d70616e69657318092003280b322f2e" .
            "636f6d70616e79536572766963652e436f6d70616e794c6973745265706c" .
            "792e436f6d70616e696573456e74727912190a116f726465726564436f6d" .
            "70616e79494473180a200328091a410a0e436f6d70616e696573456e7472" .
            "79120b0a036b6579180120012809121e0a0576616c756518022001280b32" .
            "0f2e636f6d6d6f6e2e436f6d70616e793a0238012294010a14436f6d7061" .
            "6e794372656174655265717565737412260a0a616363657373496e666f18" .
            "012001280b32122e636f6d6d6f6e2e416363657373496e666f12200a0763" .
            "6f6d70616e7918082001280b320f2e636f6d6d6f6e2e436f6d70616e7912" .
            "320a117573657243726561746552657175657374180c2001280b32172e75" .
            "7365722e5573657243726561746552657175657374224d0a12436f6d7061" .
            "6e794372656174655265706c7912240a097265706c79496e666f18012001" .
            "280b32112e636f6d6d6f6e2e5265706c79496e666f12110a09636f6d7061" .
            "6e794964180b2001280922730a14436f6d70616e79557064617465526571" .
            "7565737412260a0a616363657373496e666f18012001280b32122e636f6d" .
            "6d6f6e2e416363657373496e666f12200a07636f6d70616e791808200128" .
            "0b320f2e636f6d6d6f6e2e436f6d70616e7912110a09636f6d70616e7949" .
            "64180b2001280922520a15436f6d70616e7944657374726f795265717565" .
            "737412260a0a616363657373496e666f18012001280b32122e636f6d6d6f" .
            "6e2e416363657373496e666f12110a09636f6d70616e794964180b200128" .
            "09222e0a17436f6d70616e79417661696c61626c65526571756573741213" .
            "0a0b646973706c61794e616d6518012001280922630a15436f6d70616e79" .
            "417661696c61626c655265706c7912240a097265706c79496e666f180120" .
            "01280b32112e636f6d6d6f6e2e5265706c79496e666f12110a09636f6d70" .
            "616e79496418022001280912110a09617661696c61626c65180320012808" .
            "32a0040a0e436f6d70616e795365727669636512650a0b636f6d70616e79" .
            "4c69737412222e636f6d70616e79536572766963652e436f6d70616e794c" .
            "697374526571756573741a202e636f6d70616e79536572766963652e436f" .
            "6d70616e794c6973745265706c79221082d3e493020a22052f6c6973743a" .
            "012a126d0a0d636f6d70616e7943726561746512242e636f6d70616e7953" .
            "6572766963652e436f6d70616e79437265617465526571756573741a222e" .
            "636f6d70616e79536572766963652e436f6d70616e794372656174655265" .
            "706c79221282d3e493020c22072f6372656174653a012a125c0a0d636f6d" .
            "70616e7955706461746512242e636f6d70616e79536572766963652e436f" .
            "6d70616e79557064617465526571756573741a112e636f6d6d6f6e2e5265" .
            "706c79496e666f221282d3e493020c22072f7570646174653a012a125f0a" .
            "0e636f6d70616e7944657374726f7912252e636f6d70616e795365727669" .
            "63652e436f6d70616e7944657374726f79526571756573741a112e636f6d" .
            "6d6f6e2e5265706c79496e666f221382d3e493020d22082f64657374726f" .
            "793a012a12790a10636f6d70616e79417661696c61626c6512272e636f6d" .
            "70616e79536572766963652e436f6d70616e79417661696c61626c655265" .
            "71756573741a252e636f6d70616e79536572766963652e436f6d70616e79" .
            "417661696c61626c655265706c79221582d3e493020f220a2f617661696c" .
            "61626c653a012a421cca0219416c6661747261696e696e675c477270635c" .
            "436f6d70616e79620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}


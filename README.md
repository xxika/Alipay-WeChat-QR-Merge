## 支付宝 & 微信二维码合并

#### 原理

支付宝与微信在扫描二维码若出现协议地址(例如网址)时会访问该地址。

当前程序即根据 User-Agent 中的信息判断来访者来访客户端，并根据不同的客户端跳转到不同的地址。

#### 示例

如下为 User-Agent 示例：

##### Alipay

```
Mozilla/5.0 (Linux; U; Android 5.1; zh-CN; m3 note Build/LMY47I) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/40.0.2214.89 UCBrowser/11.5.0.939 UCBS/2.10.1.6 Mobile Safari/537.36 Nebula AlipayDefined(nt:WIFI,ws:360|0|3.0) AliApp(AP/10.0.15.051805) AlipayClient/10.0.15.051805 Language/zh-Hans useStatusBar/true
```

##### WeChat

```
Mozilla/5.0 (Linux; Android 5.1; m3 note Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/53.0.2785.49 Mobile MQQBrowser/6.2 TBS/043220 Safari/537.36 MicroMessenger/6.5.8.1060 NetType/WIFI Language/zh_CN
```

如上测试截止 2017 年 06 月 08 日由最新版的支付宝、微信客户端测试访问所记录，来自魅蓝 Note 3 手机。

## 注意事项

由于微信使用 wxp:// 协议(自订的协议)，因此无法实现跳转功能、只能是在扫描二合一的二维码后要去长按图片再扫一次真实的二维码地址。
## 协议声明

Copyright &copy; 2017 Hostribe Technology Co., Ltd. All Rights Reserved. Code released under [the MIT license](./LICENSE).

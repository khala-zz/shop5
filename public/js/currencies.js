  var Currency = {
    rates: {"USD":1.0,"EUR":1.19353,"GBP":1.38817,"CAD":0.813167,"ARS":0.0104805,"AUD":0.759366,"BRL":0.202681,"CLP":0.00136395,"CNY":0.154917,"CYP":0.397899,"CZK":0.046873,"DKK":0.160509,"EEK":0.0706676,"HKD":0.128834,"HUF":0.00339904,"ISK":0.00812404,"INR":0.0134815,"JMD":0.00669584,"JPY":0.00902581,"LVL":1.57329,"LTL":0.320236,"MTL":0.293496,"MXN":0.0504467,"NZD":0.706917,"NOK":0.11778,"PLN":0.26438,"SGD":0.744819,"SKK":21.5517,"SIT":175.439,"ZAR":0.0707172,"KRW":0.00088701,"SEK":0.117747,"CHF":1.0901,"TWD":0.0357859,"UYU":0.0230032,"MYR":0.240594,"BSD":1.0,"CRC":0.00161093,"RON":0.242155,"PHP":0.0205905,"AED":0.272294,"VEB":3.14802e-15,"IDR":6.92021e-05,"TRY":0.114277,"THB":0.0314476,"TTD":0.147001,"ILS":0.307683,"SYP":0.000795,"XCD":0.37037,"COP":0.000267152,"RUB":0.0138439,"HRK":0.15931,"KZT":0.00234313,"TZS":0.0004315,"XPT":1111.75,"SAR":0.266667,"NIO":0.0286378,"LAK":0.000105806,"OMR":2.60078,"AMD":0.00200248,"CDF":0.000503525,"KPW":0.00111111,"SPL":6.0,"KES":0.00927622,"ZWD":0.00276319,"KHR":0.000245116,"MVR":0.0638162,"GTQ":0.129009,"BZD":0.496229,"BYR":3.96825e-05,"LYD":0.222509,"DZD":0.00742999,"BIF":0.000507875,"GIP":1.38817,"BOB":0.145031,"XOF":0.00181953,"STD":4.86634e-05,"NGN":0.00243603,"PGK":0.284998,"ERN":0.0666667,"MWK":0.00124077,"CUP":0.04,"GMD":0.0195501,"CVE":0.0108237,"BTN":0.0134815,"XAF":0.00181953,"UGX":0.000281248,"MAD":0.11168,"MNT":0.000350781,"LSL":0.0707172,"XAG":26.1213,"TOP":0.446404,"SHP":1.38817,"RSD":0.0101436,"HTG":0.010582,"MGA":0.000262094,"MZN":0.0158352,"FKP":1.38817,"BWP":0.0919536,"HNL":0.0418458,"PYG":0.000147131,"JEP":1.38817,"EGP":0.0638888,"LBP":0.00066335,"ANG":0.55944,"WST":0.387298,"TVD":0.759366,"GYD":0.00475578,"GGP":1.38817,"NPR":0.00838662,"KMF":0.00242603,"IRR":2.37952e-05,"XPD":2633.46,"SRD":0.0481232,"TMM":5.69801e-05,"SZL":0.0707172,"MOP":0.125081,"BMD":1.0,"XPF":0.0100018,"ETB":0.0229204,"JOD":1.41044,"MDL":0.0556979,"MRO":0.00275632,"YER":0.00405104,"BAM":0.610242,"AWG":0.558659,"PEN":0.251638,"VEF":3.14802e-12,"SLL":9.79486e-05,"KYD":1.21951,"AOA":0.00154314,"TND":0.362382,"TJS":0.0883305,"SCR":0.0666729,"LKR":0.00502446,"DJF":0.00561799,"GNF":0.00010189,"VUV":0.00917784,"SDG":0.00225339,"IMP":1.38817,"GEL":0.317763,"FJD":0.484932,"DOP":0.0175622,"XDR":1.42893,"MUR":0.024213,"MMK":0.000607082,"LRD":0.00584798,"BBD":0.5,"ZMK":4.40909e-05,"XAU":1781.29,"VND":4.33559e-05,"UAH":0.036291,"TMT":0.2849,"IQD":0.0006852,"BGN":0.610242,"KGS":0.0118119,"RWF":0.00101485,"BHD":2.65957,"UZS":9.46524e-05,"PKR":0.0063498,"MKD":0.0193723,"AFN":0.0127389,"NAD":0.0707172,"BDT":0.011782,"AZN":0.588236,"SOS":0.00170913,"QAR":0.274725,"PAB":1.0,"CUC":1.0,"SVC":0.114286,"SBD":0.125051,"ALL":0.00974699,"BND":0.744819,"KWD":3.31458,"GHS":0.172363,"ZMW":0.0440909,"XBT":32716.5,"NTD":0.0337206,"BYN":0.396825,"CNH":0.154772,"MRU":0.0275632,"STN":0.0486634,"VES":3.14802e-07,"MXV":0.337309},
    convert: function(amount, from, to) {
      return (amount * this.rates[from]) / this.rates[to];
    }
  };

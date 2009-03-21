/**
 * @file            transport.js
 * @description     鐢ㄤ簬鏀寔AJAX镄勪紶杈撶被銆?
 * @author          ECShop R&D Team ( http://www.ecshop.com/ )
 * @date            2007-03-08 Wednesday
 * @license         Licensed under the Academic Free License 2.1 http://www.opensource.org/licenses/afl-2.1.php
 * @version         1.0.20070308
**/

var Transport =
{
  /* *
  * 瀛桦偍链璞℃墍鍦ㄧ殑鏂囦欢鍚嶃€?
  *
  * @static
  */
  filename : "transport.js",

  /* *
  * 瀛桦偍鏄惁杩涘叆璋冭瘯妯″纺镄勫紑鍏筹紝镓揿嵃璋冭瘯娑堟伅镄勬柟寮忥紝鎹㈣绗︼紝璋冭瘯鐢ㄧ殑瀹瑰櫒镄処D銆?
  *
  * @private
  */
  debugging :
  {
    isDebugging : 0,
    debuggingMode : 0,
    linefeed : "",
    containerId : 0
  },

  /* *
  * 璁剧疆璋冭瘯妯″纺浠ュ强镓揿嵃璋冭瘯娑堟伅鏂瑰纺镄勬柟娉曘€?
  *
  * @public
  * @param   {int}   鏄惁镓揿紑璋冭瘯妯″纺      0锛氩叧闂紝1锛氭墦寮€
  * @param   {int}   镓揿嵃璋冭瘯娑堟伅镄勬柟寮?   0锛歛lert锛?锛歩nnerHTML
  *
  */
  debug : function (isDebugging, debuggingMode)
  {
    this.debugging =
    {
      "isDebugging" : isDebugging,
      "debuggingMode" : debuggingMode,
      "linefeed" : debuggingMode ? "<br />" : "\n",
      "containerId" : "dubugging-container" + new Date().getTime()
    };
  },

  /* *
  * 浼犺緭瀹屾瘯鍚庤嚜锷ㄨ皟鐢ㄧ殑鏂规硶锛屼紭鍏堢骇姣旗敤鎴蜂粠run()鏂规硶涓紶鍏ョ殑锲炶皟鍑芥暟楂朴€?
  *
  * @public
  */
  onComplete : function ()
  {
  },

  /* *
  * 浼犺緭杩囩▼涓嚜锷ㄨ皟鐢ㄧ殑鏂规硶銆?
  *
  * @public
  */
  onRunning : function ()
  {
  },

  /* *
  * 璋幂敤姝ゆ柟娉曞彂阃丠TTP璇锋眰銆?
  *
  * @public
  * @param   {string}    url             璇锋眰镄刄RL鍦板潃
  * @param   {mix}       params          鍙戦€佸弬鏁?
  * @param   {Function}  callback        锲炶皟鍑芥暟
  * @param   {string}    ransferMode     璇锋眰镄勬柟寮忥紝链?GET"鍜?POST"涓ょ
  * @param   {string}    responseType    鍝嶅簲绫诲瀷锛屾湁"JSON"銆?XML"鍜?TEXT"涓夌
  * @param   {boolean}   asyn            鏄惁寮傛璇锋眰镄勬柟寮?
  * @param   {boolean}   quiet           鏄惁瀹夐润妯″纺璇锋眰
  */
  run : function (url, params, callback, transferMode, responseType, asyn, quiet)
  {
    /* 澶勭悊鐢ㄦ埛鍦ㄨ皟鐢ㄨ鏂规硶镞惰緭鍏ョ殑鍙傛暟 */
    params = this.parseParams(params);
    transferMode = typeof(transferMode) === "string"
    && transferMode.toUpperCase() === "GET"
    ? "GET"
    : "POST";

    if (transferMode === "GET")
    {
      var d = new Date();

      url += params ? (url.indexOf("?") === - 1 ? "?" : "&") + params : "";
      url = encodeURI(url) + (url.indexOf("?") === - 1 ? "?" : "&") + d.getTime() + d.getMilliseconds();
      params = null;
    }

    responseType = typeof(responseType) === "string" && ((responseType = responseType.toUpperCase()) === "JSON" || responseType === "XML") ? responseType : "TEXT";
    asyn = asyn === false ? false : true;

    /* 澶勭悊HTTP璇锋眰鍜屽搷搴?*/
    var xhr = this.createXMLHttpRequest();

    try
    {
      var self = this;

      if (typeof(self.onRunning) === "function" && !quiet)
      {
        self.onRunning();
      }

      xhr.open(transferMode, url, asyn);

      if (transferMode === "POST")
      {
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      }

      if (asyn)
      {
        xhr.onreadystatechange = function ()
        {
          if (xhr.readyState == 4)
          {
            switch ( xhr.status )
            {
              case 0:
              case 200: // OK!
                /*
                 * If the request was to create a new resource
                 * (such as post an item to the database)
                 * You could instead return a status code of '201 Created'
                 */

                if (typeof(self.onComplete) === "function")
                {
                  self.onComplete();
                }

                if (typeof(callback) === "function")
                {
                  callback.call(self, self.parseResult(responseType, xhr), xhr.responseText);
                }
              break;

              case 304: // Not Modified
                /*
                 * This would be used when your Ajax widget is
                 * checking for updated content,
                 * such as the Twitter interface.
                 */
              break;

              case 400: // Bad Request
                /*
                 * A bit like a safety net for requests by your JS interface
                 * that aren't supported on the server.
                 * "Your browser made a request that the server cannot understand"
                 */
                 alert("XmlHttpRequest status: [400] Bad Request");
              break;

              case 404: // Not Found
                alert("XmlHttpRequest status: [404] \nThe requested URL "+url+" was not found on this server.");
              break;

              case 409: // Conflict
                /*
                 * Perhaps your JavaScript request attempted to
                 * update a Database record
                 * but failed due to a conflict
                 * (eg: a field that must be unique)
                 */
              break;

              case 503: // Service Unavailable
                /*
                 * A resource that this request relies upon
                 * is currently unavailable
                 * (eg: a file is locked by another process)
                 */
                 alert("XmlHttpRequest status: [503] Service Unavailable");
              break;

              default:
                alert("XmlHttpRequest status: [" + xhr.status + "] Unknow status.");
            }

            xhr = null;
          }
        }
        if (xhr != null) xhr.send(params);
      }
      else
      {
        if (typeof(self.onRunning) === "function")
        {
          self.onRunning();
        }

        xhr.send(params);

        var result = self.parseResult(responseType, xhr);
        //xhr = null;

        if (typeof(self.onComplete) === "function")
        {
          self.onComplete();
        }
        if (typeof(callback) === "function")
        {
          callback.call(self, result, xhr.responseText);
        }

        return result;
      }
    }
    catch (ex)
    {
      if (typeof(self.onComplete) === "function")
      {
        self.onComplete();
      }

      alert(this.filename + "/run() error:" + ex.description);
    }
  },

  /* *
  * 濡傛灉寮€鍚简璋冭瘯妯″纺锛岃鏂规硶浼氭墦鍗板嚭鐩稿簲镄勪俊鎭€?
  *
  * @private
  * @param   {string}    info    璋冭瘯淇℃伅
  * @param   {string}    type    淇℃伅绫诲瀷
  */
  displayDebuggingInfo : function (info, type)
  {
    if ( ! this.debugging.debuggingMode)
    {
      alert(info);
    }
    else
    {

      var id = this.debugging.containerId;
      if ( ! document.getElementById(id))
      {
        div = document.createElement("DIV");
        div.id = id;
        div.style.position = "absolute";
        div.style.width = "98%";
        div.style.border = "1px solid #f00";
        div.style.backgroundColor = "#eef";
        var pageYOffset = document.body.scrollTop
        || window.pageYOffset
        || 0;
        div.style.top = document.body.clientHeight * 0.6
        + pageYOffset
        + "px";
        document.body.appendChild(div);
        div.innerHTML = "<div></div>"
        + "<hr style='height:1px;border:1px dashed red;'>"
        + "<div></div>";
      }

      var subDivs = div.getElementsByTagName("DIV");
      if (type === "param")
      {
        subDivs[0].innerHTML = info;
      }
      else
      {
        subDivs[1].innerHTML = info;
      }
    }
  },

  /* *
  * 鍒涘缓XMLHttpRequest瀵硅薄镄勬柟娉曘€?
  *
  * @private
  * @return      杩斿洖涓€涓猉MLHttpRequest瀵硅薄
  * @type    Object
  */
  createXMLHttpRequest : function ()
  {
    var xhr = null;

    if (window.ActiveXObject)
    {
      var versions = ['Microsoft.XMLHTTP', 'MSXML6.XMLHTTP', 'MSXML5.XMLHTTP', 'MSXML4.XMLHTTP', 'MSXML3.XMLHTTP', 'MSXML2.XMLHTTP', 'MSXML.XMLHTTP'];

      for (var i = 0; i < versions.length; i ++ )
      {
        try
        {
          xhr = new ActiveXObject(versions[i]);
          break;
        }
        catch (ex)
        {
          continue;
        }
      }
    }
    else
    {
      xhr = new XMLHttpRequest();
    }

    return xhr;
  },

  /* *
  * 褰扑紶杈撹绷绋嫔彂鐢熼敊璇椂灏呜皟鐢ㄦ鏂规硶銆?
  *
  * @private
  * @param   {Object}    xhr     XMLHttpRequest瀵硅薄
  * @param   {String}    url     HTTP璇锋眰镄勫湴鍧€
  */
  onXMLHttpRequestError : function (xhr, url)
  {
    throw "URL: " + url + "\n"
    +  "readyState: " + xhr.readyState + "\n"
    + "state: " + xhr.status + "\n"
    + "headers: " + xhr.getAllResponseHeaders();
  },

  /* *
  * 瀵瑰皢瑕佸彂阃佺殑鍙傛暟杩涜镙煎纺鍖栥€?
  *
  * @private
  * @params {mix}    params      灏呜鍙戦€佺殑鍙傛暟
  * @return 杩斿洖鍚堟硶镄勫弬鏁?
  * @type string
  */
  parseParams : function (params)
  {
    var legalParams = "";
    params = params ? params : "";

    if (typeof(params) === "string")
    {
      legalParams = params;
    }
    else if (typeof(params) === "object")
    {
      try
      {
        legalParams = "JSON=" + params.toJSONString();
      }
      catch (ex)
      {
        alert("Can't stringify JSON!");
        return false;
      }
    }
    else
    {
      alert("Invalid parameters!");
      return false;
    }

    if (this.debugging.isDebugging)
    {
      var lf = this.debugging.linefeed,
      info = "[Original Parameters]" + lf + params + lf + lf
      + "[Parsed Parameters]" + lf + legalParams;

      this.displayDebuggingInfo(info, "param");
    }

    return legalParams;
  },

  /* *
  * 瀵硅繑锲炵殑HTTP鍝嶅簲缁撴灉杩涜杩囨护銆?
  *
  * @public
  * @params   {mix}   result   HTTP鍝嶅簲缁撴灉
  * @return  杩斿洖杩囨护鍚庣殑缁撴灉
  * @type string
  */
  preFilter : function (result)
  {
    return result.replace(/\xEF\xBB\xBF/g, "");
  },

  /* *
  * 瀵硅繑锲炵殑缁撴灉杩涜镙煎纺鍖栥€?
  *
  * @private
  * @return 杩斿洖鐗瑰畾镙煎纺镄勬暟鎹粨鏋?
  * @type mix
  */
  parseResult : function (responseType, xhr)
  {
    var result = null;

    switch (responseType)
    {
      case "JSON" :
        result = this.preFilter(xhr.responseText);
        try
        {
          result = result.parseJSON();
        }
        catch (ex)
        {
          throw this.filename + "/parseResult() error: can't parse to JSON.\n\n" + xhr.responseText;
        }
        break;
      case "XML" :
        result = xhr.responseXML;
        break;
      case "TEXT" :
        result = this.preFilter(xhr.responseText);
        break;
      default :
        throw this.filename + "/parseResult() error: unknown response type:" + responseType;
    }

    if (this.debugging.isDebugging)
    {
      var lf = this.debugging.linefeed,
      info = "[Response Result of " + responseType + " Format]" + lf
      + result;

      if (responseType === "JSON")
      {
        info = "[Response Result of TEXT Format]" + lf
        + xhr.responseText + lf + lf
        + info;
      }

      this.displayDebuggingInfo(info, "result");
    }

    return result;
  }
};

/* 瀹氢箟涓や釜鍒悕 */
var Ajax = Transport;
Ajax.call = Transport.run;

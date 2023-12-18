"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[8398],{68919:function(e,t,r){r.d(t,{Z:function(){return o}});var n=r(19841),a=r(35250);function o(e){var t=e.percentage,r=e.thickness,o=e.className,i=e.backgroundStrokeClassName,u=e.transitionDuration,l=e.transitionTimingFunction,s=e.onTransitionEnd,c=120*(void 0===r?1/12:r),d=(120-c)/2,f=2*Math.PI*d;return(0,a.jsxs)("svg",{width:120,height:120,viewBox:"0 0 ".concat(120," ").concat(120),className:o,children:[(0,a.jsx)("circle",{className:(0,n.default)("origin-[50%_50%] -rotate-90",void 0===i?"stroke-gray-400":i),strokeWidth:c,fill:"transparent",r:d,cx:60,cy:60}),(0,a.jsx)("circle",{className:"origin-[50%_50%] -rotate-90 transition-[stroke-dashoffset]",stroke:"currentColor",strokeWidth:c,strokeDashoffset:f-t/100*f,strokeDasharray:"".concat(f," ").concat(f),fill:"transparent",r:d,cx:60,cy:60,style:{transitionDuration:u,transitionTimingFunction:l},onTransitionEnd:s})]})}},8024:function(e,t,r){var n=r(5397),a=r.n(n);r(70079);var o=r(35250),i=function(e){var t=e.children;return(0,o.jsx)(o.Fragment,{children:t})};t.Z=a()(function(){return Promise.resolve(i)},{ssr:!1})},41845:function(e,t,r){r.d(t,{$e:function(){return o},EZ:function(){return i},Ql:function(){return a},dO:function(){return n},xC:function(){return u}});var n=10,a=4,o={duration:20,hasCloseButton:!0},i=512,u=536870912},7525:function(e,t,r){var n,a,o,i;r.d(t,{A:function(){return n},X:function(){return a}}),(o=n||(n={}))[o.None=0]="None",o[o.Multimodal=1]="Multimodal",o[o.Interpreter=2]="Interpreter",o[o.Retrieval=3]="Retrieval",o[o.ContextConnector=4]="ContextConnector",o[o.ProfilePicture=5]="ProfilePicture",(i=a||(a={})).Uploading="uploading",i.Ready="ready"},31609:function(e,t,r){r.d(t,{W7:function(){return m},cT:function(){return g},lU:function(){return x},po:function(){return v}});var n=r(50134),a=r(4399),o=r.n(a),i=r(82256),u=r(17046),l=r(24558),s=r(88654),c=r(94968),d=r(4748),f=r(55161),p={duration:20,hasCloseButton:!0};function m(e){return JSON.stringify({file:e.name,modified:e.lastModified,currentTime:new Date().toString()})}function v(e){return new Promise(function(t,r){var n=new FileReader,a=new Image;n.onload=function(){a.onload=function(){return t(a)},a.onerror=function(e){return r(e)},a.src=n.result},n.readAsDataURL(e)})}function g(e,t,r,n,a,o){return h.apply(this,arguments)}function h(){return(h=(0,n.Z)(o().mark(function e(t,r,n,a,s,c){var m,v,g,h,x,k,_,M;return o().wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return m=c.usesRetrievalIndex?performance.now():void 0,e.prev=1,e.next=4,l.ZP.createFile(r.name,r.size,a);case 4:return x=(h=e.sent).file_id,k=h.upload_url,s.onFileCreated(t,x,k),_=a.kind===i.Ei.Gizmo?a.gizmoId:void 0,e.next=11,function(e,t,r,n,a){return w.apply(this,arguments)}(t,r,x,k,s.onFileUploadProgress,null!==(v=c.usesRetrievalIndex)&&void 0!==v&&v,null!==(g=c.shouldUpdateProgress)&&void 0!==g&&g,{gizmoId:_});case 11:if(!c.usesRetrievalIndex){e.next=19;break}return e.next=14,function(e,t){return y.apply(this,arguments)}(x,_);case 14:(null==(M=e.sent)?void 0:M.status)===i.Xf.Skipped&&d.m.danger(n.formatMessage(b.retrievalSkippedFile,{fileName:M.name}),p),s.onFileUploaded(t,void 0,{fileTokenSize:M.file_size_tokens}),e.next=20;break;case 19:s.onFileUploaded(t,c.imageDimensions);case 20:null!=m&&l.ZP.postRetrievalTiming({e2eLatencyMs:performance.now()-m}),e.next=27;break;case 23:e.prev=23,e.t0=e.catch(1),function(e,t,r){var n=(0,f.kr)(e,"default_upload_error",{fileName:t.name});(0,u.T)(r)&&void 0!==r.code&&(n=(0,f.kr)(e,r.code)),d.m.danger(n,p)}(n,r,e.t0),s.onError(t,"error");case 27:case"end":return e.stop()}},e,null,[[1,23]])}))).apply(this,arguments)}function x(e,t,r,n,a){return k.apply(this,arguments)}function k(){return(k=(0,n.Z)(o().mark(function e(t,r,n,a,i){var u,l,s;return o().wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,v(r);case 2:return l=(u=e.sent).width,s=u.height,e.abrupt("return",g(t,r,n,{kind:a},i,{imageDimensions:{width:l,height:s}}));case 6:case"end":return e.stop()}},e)}))).apply(this,arguments)}function w(){return(w=(0,n.Z)(o().mark(function e(t,r,a,i,u){var s,c,d,f=arguments;return o().wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return s=f.length>5&&void 0!==f[5]&&f[5],c=f.length>6&&void 0!==f[6]&&f[6],d=f.length>7&&void 0!==f[7]?f[7]:{},e.next=5,l.ZP.uploadFileToAzureStorage(r,i,function(e){c&&u(t,10+80*e)}).then(function(){var e=(0,n.Z)(o().mark(function e(r){return o().wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return u(t,90),201!==r.status&&function(e,t){_.apply(this,arguments)}(r,a,s),e.next=4,l.ZP.processFileUpload(a,d);case 4:case"end":return e.stop()}},e)}));return function(t){return e.apply(this,arguments)}}());case 5:return e.abrupt("return",e.sent);case 6:case"end":return e.stop()}},e)}))).apply(this,arguments)}function y(){return(y=(0,n.Z)(o().mark(function e(t,r){var n,a,u,c;return o().wrap(function(e){for(;;)switch(e.prev=e.next){case 0:n=Date.now()+6e4,a=function(e){return new Promise(function(t){return setTimeout(t,e)})},u=0;case 3:if(!(Date.now()<n)){e.next=18;break}return e.next=6,l.ZP.getRetrievalStatus(t,r);case 6:if(!((c=e.sent).status===i.Xf.Success||c.status===i.Xf.Skipped)){e.next=11;break}return e.abrupt("return",c);case 11:if(c.status!==i.Xf.Failed){e.next=13;break}throw new s.gK("Context extraction failed",void 0,c.error_code);case 13:return u++,e.next=16,a(Math.min(1e3,100*u));case 16:e.next=3;break;case 18:throw new s.gK("Retrieval indexing timed out");case 19:case"end":return e.stop()}},e)}))).apply(this,arguments)}function _(){return(_=(0,n.Z)(o().mark(function e(t,r){var n,a,i=arguments;return o().wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return n=i.length>2&&void 0!==i[2]&&i[2],a="Unknown error",e.prev=2,e.next=5,t.data;case 5:a=e.sent,e.next=10;break;case 8:e.prev=8,e.t0=e.catch(2);case 10:throw n&&l.ZP.markFileUploadFailed(r,{error:a}),new s.gK("File upload to blobstore failed",void 0,"default_upload_error");case 12:case"end":return e.stop()}},e,null,[[2,8]])}))).apply(this,arguments)}var b=(0,c.vU)({retrievalSkippedFile:{id:"useFilePickerState.retrievalSkippedFile",defaultMessage:'Unable to extract text from "{fileName}"'}})},55161:function(e,t,r){r.d(t,{$H:function(){return h},$p:function(){return T},CO:function(){return P},Iy:function(){return v},KL:function(){return E},L8:function(){return g},O6:function(){return w},Tu:function(){return L},VF:function(){return k},WI:function(){return I},YN:function(){return _},Z8:function(){return Z},Zp:function(){return C},_0:function(){return F},kr:function(){return x},p0:function(){return U},ww:function(){return y},xs:function(){return M}});var n=r(50134),a=r(4399),o=r.n(a),i=r(82256),u=r(11591),l=r(24558),s=r(15136),c=r(70079),d=r(70671),f=r(94968),p=r(4748),m=r(7525);function v(e){return e.replace("file-service://","")}function g(e){return"file-service://"+e}function h(e){return e.startsWith("file-service://")}function x(e,t,r){switch(t){case"file_zero_bytes":return e.formatMessage(N.fileZeroBytes,r);case"file_too_large":return e.formatMessage(N.fileTooLarge,r);case"over_user_quota":return e.formatMessage(N.overUserQuota,r);case"file_not_found":case"file_expired":return e.formatMessage(N.fileNotFound,r);case"file_timed_out":return e.formatMessage(N.fileTimedOut,r);case"ace_pod_expired":return e.formatMessage(N.codeInterpreterSessionTimeout,r);case"permission_error":return e.formatMessage(N.permissionError,r);case"default_upload_error":case"file_rejected":return e.formatMessage(N.defaultCreateEntryError,r);case"default_download_link_error":return e.formatMessage(N.defaultDownloadLinkError,r);case"file_empty":return e.formatMessage(N.fileEmpty,r);case"too_many_tokens":return e.formatMessage(N.fileTooManyTokens,r);case"file_encrypted":return e.formatMessage(N.fileEncrypted,r);case"file_corrupted":return e.formatMessage(N.fileCorrupted,r);default:return e.formatMessage(N.unknownError)}}function k(){var e=(0,d.Z)();return(0,c.useCallback)(function(t,r){return x(e,t,r)},[e])}function w(){var e,t=(0,s.kP)().session,r=(0,d.Z)();return e=(0,n.Z)(o().mark(function e(n,a){var u,s,c,d,f,m,v,g;return o().wrap(function(e){for(;;)switch(e.prev=e.next){case 0:if(null!=t){e.next=3;break}return p.m.danger(r.formatMessage(N.fileDownloadFailed)),e.abrupt("return",!1);case 3:return e.prev=3,e.next=6,l.ZP.getFileDownloadLink(n);case 6:if(!((c=e.sent).status!==i.KF.Success)){e.next=9;break}throw Error("File is not ready to download: "+JSON.stringify(c));case 9:if(!(null!=(d=null===(u=c.metadata)||void 0===u?void 0:null===(s=u.context_connector)||void 0===s?void 0:s.url))){e.next=14;break}window.open(d,"_blank"),e.next=26;break;case 14:return e.next=16,fetch(c.download_url).then(function(e){return e.blob()});case 16:f=e.sent,m=URL.createObjectURL(f),(v=window.open(m,"_blank"))&&v.addEventListener("beforeunload",function(){URL.revokeObjectURL(m)}),(g=document.createElement("a")).href=m,g.download=a,g.style.display="none",g.click(),URL.revokeObjectURL(m);case 26:e.next=32;break;case 28:return e.prev=28,e.t0=e.catch(3),p.m.danger(r.formatMessage(N.fileDownloadFailed)),e.abrupt("return",!1);case 32:return e.abrupt("return",!0);case 33:case"end":return e.stop()}},e,null,[[3,28]])})),function(t,r){return e.apply(this,arguments)}}function y(e,t){if((null==t?void 0:t.kind)===u.OL.GizmoInteraction||(null==t?void 0:t.kind)===u.OL.GizmoTest){var r;return null===(r=t.gizmo)||void 0===r?void 0:r.product_features}return null==e?void 0:e.product_features}function _(e,t){var r,n,a,o,u=y(e,t);return(null==u?void 0:null===(r=u.attachments)||void 0===r?void 0:r.type)===i.Cd.CodeInterpreter?m.A.Interpreter:(null==u?void 0:null===(n=u.attachments)||void 0===n?void 0:n.type)===i.Cd.Multimodal?m.A.Multimodal:(null==u?void 0:null===(a=u.attachments)||void 0===a?void 0:a.type)===i.Cd.Retrieval?m.A.Retrieval:(null==u?void 0:null===(o=u.attachments)||void 0===o?void 0:o.type)===i.Cd.ContextConnector?m.A.ContextConnector:m.A.None}function b(e){var t,r=null===(t=e.split(".").pop())||void 0===t?void 0:t.toLowerCase();return({md:"text/markdown",java:"text/x-java",py:"text/x-script.python",c:"text/x-c",cpp:"text/x-c++",h:"text/x-c++",php:"text/x-php",rb:"text/x-ruby",tex:"application/x-latext",ts:"text/x-typescript",cs:"text/x-csharp"})[null!=r?r:""]||""}function M(e,t,r,n){if(null==n)return e;var a=b(t);a&&(r=a);var o=n.accepted_mime_types,i=n.can_accept_all_mime_types;return null!=o&&0!==o.length&&i?o.includes(r)?e:m.A.Interpreter:e}function F(e,t,r){var n,a,o,u=""!==t?t:b(r),l=null==e?void 0:null===(n=e.product_features)||void 0===n?void 0:n.attachments;return null==l?void 0:null!==(a=l.accepted_mime_types)&&void 0!==a&&a.includes(u)?l.type:null!==(o=l.image_mime_types)&&void 0!==o&&o.includes(u)?i.Cd.Multimodal:i.Cd.CodeInterpreter}function C(e,t){var r,n,a=y(e,t);return null!=a&&null!==(r=a.attachments)&&void 0!==r&&r.can_accept_all_mime_types?void 0:null==a?void 0:null===(n=a.attachments)||void 0===n?void 0:n.accepted_mime_types}function U(e,t){var r,n=y(e,t),a=(null!=n?n:{}).attachments;return null!=a&&a.image_mime_types?a.image_mime_types:(null==a?void 0:a.type)==="multimodal"?null!==(r=a.accepted_mime_types)&&void 0!==r?r:E:[]}var E=["image/png","image/jpeg","image/gif","image/webp"];function Z(e){return(0,c.useMemo)(function(){if(void 0===e)return{};var t={"image/jpeg":[".jpg",".jpeg"],"image/svg+xml":[".svg"],"application/vnd.openxmlformats-officedocument.wordprocessingml.document":[".docx"],"application/vnd.openxmlformats-officedocument.presentationml.presentation":[".pptx"]};return{accept:e.reduce(function(e,r){return r in t?e[r]=t[r]:r.includes("/")&&(e[r]=[".".concat(r.split("/")[1])]),e},{})}},[e])}function T(e){var t;return null===(t=e.split(".").pop())||void 0===t?void 0:t.toLowerCase()}function P(e){var t=T(e);return null!=t&&["jpg","jpeg","png","gif","webp"].includes(t)}function L(e,t){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"fit";return new Promise(function(n,a){var o=new FileReader;o.onerror=function(e){console.error("File reading has failed:",e),a(Error("Failed to read the file."))},o.onload=function(o){var i=new Image;i.onerror=function(e){console.error("Image loading has failed:",e),a(Error("Failed to load the image."))},i.onload=function(){var o,u=document.createElement("canvas"),l=0,s=0;switch(r){case"fill":case"square":o=t/Math.min(i.width,i.height);break;default:o=t/Math.max(i.width,i.height)}var c=i.width*o,d=i.height*o;"square"===r?(u.width=t,u.height=t,l=(t-c)/2,s=(t-d)/2):(u.width=c,u.height=d);var f=u.getContext("2d");if(null==f){console.error("Canvas context creation failed. Your environment might not fully support HTML5 canvas."),a(Error("Failed to create canvas context."));return}f.drawImage(i,l,s,c,d);var p=e.type||"image/png";u.toBlob(function(t){t?n(new File([t],e.name,{type:p})):(console.error("Blob creation failed. Blob is null."),a(Error("Failed to create blob from image data.")))},p)},null==o.target?(console.error("Event target is null. Failed to load image."),a("Failed to load image.")):i.src=o.target.result},o.readAsDataURL(e)})}function I(e,t){return L(e,t,"square")}var N=(0,f.vU)({defaultCreateEntryError:{id:"fileUpload.defaultCreateEntryError",defaultMessage:"Unable to upload {fileName}"},defaultDownloadLinkError:{id:"fileUpload.defaultDownloadLinkError",defaultMessage:"Failed to get upload status for {fileName}"},unknownError:{id:"fileUpload.unknownError",defaultMessage:"Unknown error occurred"},fileZeroBytes:{id:"fileUpload.fileZeroBytes",defaultMessage:"File is empty"},fileTooLarge:{id:"fileUpload.fileTooLarge",defaultMessage:"File is too large"},overUserQuota:{id:"fileUpload.overUserQuota",defaultMessage:"User quota exceeded"},fileNotFound:{id:"fileUpload.fileNotFound",defaultMessage:"File not found"},fileTimedOut:{id:"fileUpload.fileTimedOut",defaultMessage:"File upload timed out. Please try again."},fileEmpty:{id:"fileUpload.fileEmpty",defaultMessage:"No text could be extracted from this file."},fileTooManyTokens:{id:"fileUpload.fileTooManyTokens",defaultMessage:"This file contains too much text content. Please try again with a smaller file."},fileEncrypted:{id:"fileUpload.fileEncrypted",defaultMessage:"This file is encrypted/requires a password to access. Please try again with an unencrypted file."},fileCorrupted:{id:"fileUpload.fileCorrupted",defaultMessage:"This file is corrupted. Please ensure the file is not corrupted and try again."},codeInterpreterSessionTimeout:{id:"fileUpload.codeInterpreterSessionTimeout",defaultMessage:"Code interpreter session expired"},permissionError:{id:"fileUpload.permissionError",defaultMessage:"Missing permission to access file"},fileDownloadFailed:{id:"filesModal.fileDownloadFailed",defaultMessage:"File download failed. Please try again."}})},83071:function(e,t,r){r.d(t,{R:function(){return g},Vq:function(){return h},ZB:function(){return m},ZP:function(){return p},zV:function(){return v}});var n,a,o,i,u,l=r(90038),s=r(7813),c=r(19841),d=r(21389),f=r(35250);function p(e){var t=e.onClick,r=e.href,n=e.target,a=e.children,o=e.disabled;return(0,f.jsx)(s.v.Item,{disabled:o,children:function(e){var i=e.active;return(0,f.jsx)(m,{as:void 0!==r?"a":"button",onClick:t,href:r,target:n,className:(0,c.default)({"bg-gray-100 dark:bg-gray-800":i,"hover:bg-gray-100 dark:hover:bg-gray-800":!i&&!o}),children:a})}})}d.Z.a(n||(n=(0,l.Z)(["p-2 rounded-md hover:bg-black/10 hover:dark:bg-white/10 cursor-pointer"])));var m=d.Z.a(a||(a=(0,l.Z)(["flex px-3 min-h-[44px] py-1 items-center gap-3 dark:text-white cursor-pointer text-sm"]))),v=(0,d.Z)(m)(o||(o=(0,l.Z)(["border dark:border-white/20 min-h-0 hover:bg-gray-500/10 h-10 rounded-lg border-[rgba(0,0,0,0.1)]"]))),g=d.Z.div(i||(i=(0,l.Z)(["h-px dark:bg-white/10 bg-black/20"]))),h=(0,d.Z)(m)(u||(u=(0,l.Z)(["",""])),function(e){return e.$active?"bg-gray-100 dark:bg-gray-800":"dark:hover:bg-token-surface-primary hover:bg-token-surface-primary"})}}]);
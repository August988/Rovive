"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[211],{7495:function(e,r,n){var t=n(5893),a=n(7989),s=(0,n(1693).QM)({forumColumn:{},forumContainer:{minWidth:"900px"}});r.Z=function(e){var r=s();return(0,t.jsx)("div",{className:"container "+r.forumContainer,children:(0,t.jsxs)("div",{className:"row",children:[(0,t.jsxs)("div",{className:"col-10",children:[(0,t.jsx)(a.Z,{type:1}),(0,t.jsx)("div",{className:"mt-4",children:(0,t.jsx)("div",{className:"bg-white pt-2 pb-2",children:e.children})})]}),(0,t.jsx)("div",{className:"col-2",children:(0,t.jsx)(a.Z,{type:2})})]})})}},3854:function(e,r,n){n.d(r,{i:function(){return o}});var t=n(5893),a=n(8452),s=n(2300),i=function(e){return(0,t.jsxs)("div",{className:"row",children:[(0,t.jsx)("div",{className:"col-6",children:e.children}),(0,t.jsx)("div",{className:"col-6",children:(0,t.jsxs)("p",{className:"text-end fw-bold",children:[(0,t.jsx)("span",{children:(0,t.jsx)(a.Z,{href:"/Forum/Default.aspx",children:(0,t.jsx)("a",{className:"normal",children:"Home"})})}),(0,s.Z)("forumSearchEnabled",!1)?(0,t.jsx)("span",{className:"pe-1 ps-1",children:"|"}):null,(0,s.Z)("forumSearchEnabled",!1)?(0,t.jsx)("span",{children:(0,t.jsx)(a.Z,{href:"/Forum/Search.aspx",children:(0,t.jsx)("a",{className:"normal",children:"Search"})})}):null,(0,t.jsx)("span",{className:"pe-1 ps-1",children:"|"}),(0,t.jsx)("span",{children:(0,t.jsx)(a.Z,{href:"/Forum/MyForums.aspx",children:(0,t.jsx)("a",{className:"normal",children:"MyForums"})})})]})})]})};r.Z=i;var o=function(e){var r=e.cat,n=e.sub;return(0,t.jsx)(i,{children:(0,t.jsxs)("p",{className:"fw-bold",children:[(0,t.jsx)(a.Z,{href:"/Forum/Default.aspx",children:(0,t.jsx)("a",{children:"ROBLOX Forum"})})," \xbb ",(0,t.jsx)(a.Z,{href:"/Forum/ForumGroup.aspx?ForumID="+r.id,children:(0,t.jsx)("a",{children:r.name})})," \xbb ",(0,t.jsx)(a.Z,{href:"/Forum/ShowForum.aspx?ForumID="+n.id,children:(0,t.jsx)("a",{children:n.name})})]})})}},3584:function(e,r,n){var t=(0,n(1693).QM)({header:{},headerRow:{background:"#29508d","& th":{fontSize:"1.25rem",color:"#fff",fontWeight:500,paddingLeft:"0.25rem",paddingTop:"0.5rem",paddingBottom:"0.5rem"}},bodyRow:{background:"#f9f9f9","&:hover":{background:"#e9e9e9"}},lastPostHeader:{minWidth:"110px"}});r.Z=t},7211:function(e,r,n){var t=n(5893),a=n(7294),s=n(1971),i=n(8452),o=n(3854),c=n(8379),l=n(7495),d=n(3584),u=n(2300),h=15;r.Z=function(e){var r=(0,d.Z)(),n=e.id,m=(0,a.useState)(null),f=m[0],x=m[1],p=(0,a.useState)(null),j=p[0],v=p[1],g=(0,a.useState)(null),b=g[0],y=g[1],N=(0,a.useState)(e.page*h-h),w=N[0],S=N[1];(0,a.useEffect)((function(){y(null),S(e.page*h-h)}),[e]),(0,a.useEffect)((function(){var e=parseInt(n,10);x((0,s.u0)(e)),v((0,s.OT)(e)),(0,s.a6)({subCategoryId:e,cursor:w.toString(),limit:h}).then((function(e){y(e)}))}),[n,w]);var Z=b&&b.data.length>=h,O=e.page;return f?(0,t.jsxs)(l.Z,{children:[(0,t.jsx)(o.i,{cat:j,sub:f}),(0,t.jsxs)("div",{className:"w-100",children:[(0,t.jsx)("div",{className:"float-left",children:(0,t.jsx)(i.Z,{href:"/Forum/AddPost.aspx?ForumID=".concat(f.id),children:(0,t.jsx)("a",{children:"New Thread"})})}),(0,u.Z)("forumSearchEnabled",!1)?(0,t.jsx)("div",{className:"float-right",children:(0,t.jsxs)("form",{method:"GET",action:"/Forum/SearchForum.aspx",children:[(0,t.jsx)("input",{type:"hidden",name:"ForumID",value:f.id}),(0,t.jsx)("div",{className:"d-inline-block",children:(0,t.jsx)("p",{className:"fw-bold",children:"Search This Forum: "})}),(0,t.jsx)("div",{className:"d-inline-block me-1 ms-1",children:(0,t.jsx)("input",{type:"text",name:"query"})}),(0,t.jsx)("div",{className:"d-inline-block",children:(0,t.jsx)("input",{type:"submit",value:"Go"})})]})}):null]}),(0,t.jsxs)("table",{className:"w-100",children:[(0,t.jsx)("thead",{className:r.header,children:(0,t.jsxs)("tr",{className:r.headerRow,children:[(0,t.jsx)("th",{children:"Subject"}),(0,t.jsx)("th",{children:"Author"}),(0,t.jsx)("th",{className:"text-center",children:"Replies"}),(0,t.jsx)("th",{className:"text-center",children:"Views"}),(0,t.jsx)("th",{className:"text-center",children:"Last Post"})]})}),(0,t.jsxs)("tbody",{children:[null===b?(0,t.jsxs)("tr",{children:[(0,t.jsx)("td",{children:(0,t.jsx)("div",{className:"min-vh-100"})}),(0,t.jsx)("td",{}),(0,t.jsx)("td",{}),(0,t.jsx)("td",{}),(0,t.jsx)("td",{})]}):null,b?b.data.map((function(e){var n=e.post,a=e.replyCount,s=e.isRead;return(0,t.jsxs)("tr",{className:r.bodyRow,children:[(0,t.jsx)("td",{children:(0,t.jsx)(i.Z,{href:"/Forum/ShowPost.aspx?PostID=".concat(n.threadId),children:(0,t.jsxs)("a",{className:"normal",children:[(0,t.jsx)("div",{className:"d-inline-block",children:(0,t.jsx)("img",{src:s?"/img/thread-read.png":"/img/thread-unread.png",alt:"Thread Icon"})}),(0,t.jsx)("div",{className:"d-inline-block",children:n.title})]})})}),(0,t.jsx)("td",{children:n.username}),(0,t.jsx)("td",{className:"text-center",children:a.toLocaleString()}),(0,t.jsx)("td",{className:"text-center",children:"-"}),(0,t.jsxs)("td",{children:[(0,t.jsx)("p",{className:"text-center mb-0 fw-bold",children:(0,c.Z)(n.createdAt).fromNow()}),(0,t.jsx)("p",{className:"text-center mb-0",children:(0,t.jsx)(i.Z,{href:"/users/".concat(n.userId,"/profile"),children:(0,t.jsx)("a",{className:"normal",children:n.username})})})]})]})})):null]}),(0,t.jsx)("thead",{className:r.header,children:(0,t.jsxs)("tr",{className:r.headerRow,children:[(0,t.jsx)("th",{children:(0,t.jsx)("p",{className:"mb-0",children:"\u2003"})}),(0,t.jsx)("th",{}),(0,t.jsx)("th",{}),(0,t.jsx)("th",{}),(0,t.jsx)("th",{})]})})]}),(0,t.jsxs)("div",{className:"row",children:[(0,t.jsx)("div",{className:"col-6",children:(0,t.jsxs)("p",{className:"fw-bolder",children:["Page ",O]})}),(0,t.jsx)("div",{className:"col-6",children:(0,t.jsxs)("p",{className:"mb-0 text-end",children:[O>1?(0,t.jsx)(i.Z,{href:"/Forum/ShowForum.aspx?ForumID=".concat(n,"&Page=").concat(O-1),children:(0,t.jsx)("a",{className:"pe-2",children:O-1})}):null,(0,t.jsx)("span",{children:O}),Z?(0,t.jsx)(i.Z,{href:"/Forum/ShowForum.aspx?ForumID=".concat(n,"&Page=").concat(O+1),children:(0,t.jsx)("a",{className:"ps-2",children:O+1})}):null]})})]})]}):null}},7989:function(e,r,n){n.d(r,{Z:function(){return d}});var t=n(5893),a=(n(6486),n(7294)),s=n(1693),i=n(465),o={1:{name:"Banner",width:728,height:90},2:{name:"SkyScraper",width:160,height:620},3:{name:"Box",width:300,height:270}},c=n(8452),l=(0,s.QM)({adWrapper:{},adImage:{width:"100%",height:"auto",margin:"0 auto",display:"block","@media(max-width: 800px)":{paddingTop:"10px",paddingBottom:"10px"}}}),d=function(e){var r=o[e.type],n=(0,a.useState)(null),s=n[0],d=n[1],u=(0,a.useState)(null),h=u[0],m=u[1],f=(0,a.useState)(null),x=f[0],p=f[1],j=(0,a.useState)(!1),v=j[0],g=j[1],b=l();if((0,a.useEffect)((function(){(0,i.ZP)("GET","".concat((0,i.SV)(),"/user-sponsorship/").concat(e.type)).then((function(e){var r=(new DOMParser).parseFromString(e.data,"text/html"),n=r.getElementsByTagName("img"),t=r.getElementsByTagName("a");if(n.length&&t.length){var a=n[0].getAttribute("src"),s=t[0].getAttribute("href"),i=t[0].getAttribute("title");a&&s&&i?(d(a),p(i),m(s)):console.error("[error] could not get an attribute from iframe: ",a,s,i)}else console.error("[error] could not get an element from iframe:",n,t)})).catch((function(e){console.error("[error] could not load user ad:",e)}))}),[]),!r)throw new Error("unexpected adType: ".concat(e.type));return s?(0,t.jsx)("div",{className:b.adWrapper,style:v?void 0:{height:r.height,width:"100%"},children:(0,t.jsx)(c.Z,{href:h||"#",children:(0,t.jsx)("a",{title:x,children:(0,t.jsx)("img",{onLoad:function(){g(!0)},src:s,className:b.adImage,style:{maxWidth:r.width,maxHeight:r.height}})})})}):(0,t.jsx)("div",{style:{width:"100%",height:r.height}})}},1971:function(e,r,n){n.d(r,{CP:function(){return x},DV:function(){return i},KF:function(){return d},OT:function(){return p},YV:function(){return s},a6:function(){return a},fR:function(){return h},gK:function(){return l},iA:function(){return m},tH:function(){return u},u0:function(){return j},u_:function(){return o},zJ:function(){return c}});var t=n(465),a=function(e){var r=e.subCategoryId,n=e.limit,a=e.cursor;return(0,t.ZP)("GET",(0,t.mn)("forums","/v1/sub-category/"+r+"/posts?limit="+n+"&cursor="+a)).then((function(e){return e.data}))},s=function(e){var r=e.threadId,n=e.limit,a=e.cursor;return(0,t.ZP)("GET",(0,t.mn)("forums","/v1/threads/"+r+"/replies?limit="+n+"&cursor="+a)).then((function(e){return e.data}))},i=function(e){var r=e.threadId;return(0,t.ZP)("GET",(0,t.mn)("forums","/v1/threads/"+r+"/info")).then((function(e){return e.data}))},o=function(e){var r=e.postId;return(0,t.ZP)("GET",(0,t.mn)("forums","/v1/posts/"+r+"/info")).then((function(e){return e.data}))},c=function(e){var r=e.postId;return(0,t.ZP)("POST",(0,t.mn)("forums","/v1/posts/"+r+"/mark-as-read")).then((function(e){return e.data}))},l=function(e){var r=e.subCategoryId,n=e.post,a=e.subject;return(0,t.ZP)("POST",(0,t.mn)("forums","/v1/sub-category/"+r+"/thread"),{post:n,subject:a}).then((function(e){return e.data}))},d=function(e){var r=e.postId,n=e.post;return(0,t.ZP)("POST",(0,t.mn)("forums","/v1/posts/"+r+"/reply"),{post:n}).then((function(e){return e.data}))},u=function(e){var r=e.subCategoryId;return(0,t.ZP)("GET",(0,t.mn)("forums","/v1/sub-category/"+r+"/info")).then((function(e){return e.data}))},h=function(e){var r=e.postId;return(0,t.ZP)("DELETE",(0,t.mn)("forums","/v1/posts/"+r)).then((function(e){return e.data}))},m=function(e){var r=e.userId,n=e.offset,a=e.limit;return(0,t.ZP)("GET",(0,t.mn)("forums","/v1/users/"+r+"/posts?limit="+a+"&cursor="+n)).then((function(e){return e.data}))},f=[{id:1,name:"ROBLOX",subCategories:[{id:46,name:"All Things ROBLOX",description:"The area for discussions purely about ROBLOX \u2013 the features, the games, and company news."},{id:14,name:"Help (Technical Support and Account Issues)",description:"Seeking account or technical help? Post your questions here."},{id:21,name:"Suggestions & Ideas",description:"Do you have a suggestion and ideas for ROBLOX? Share your feedback here."},{id:54,name:"BLOXFaires & ROBLOX events",description:"Check here to see the crazy things ROBLOX is doing. Contest information can be found here. ROBLOX is going to be at various Maker Faires and conferences around the globe. Discuss those events here!"}]},{id:8,name:"Club Houses",subCategories:[{id:13,name:"ROBLOX Talk",description:"A popular hangout where ROBLOXians talk about various topics."},{id:18,name:"Off Topic",description:"When no other forum makes sense for your post, Off Topic will help it make even less sense."},{id:32,name:"Clans & Guilds",description:"Talk about what\u2019s going on in your Clans, Groups, Companies, and Guilds, and about the Groups feature in general."},{id:35,name:"Let's Make a Deal",description:"A fast paced community dedicated to mastering the Limited Trades and Sales market, and divining the subtleties of the ROBLOX Currency Exchange."}]}],x=function(){return f},p=function(e){var r=!0,n=!1,t=void 0;try{for(var a,s=x()[Symbol.iterator]();!(r=(a=s.next()).done);r=!0){var i=a.value,o=!0,c=!1,l=void 0;try{for(var d,u=i.subCategories[Symbol.iterator]();!(o=(d=u.next()).done);o=!0){if(d.value.id===e)return i}}catch(h){c=!0,l=h}finally{try{o||null==u.return||u.return()}finally{if(c)throw l}}}}catch(h){n=!0,t=h}finally{try{r||null==s.return||s.return()}finally{if(n)throw t}}throw new Error("Invalid subCategoryId")},j=function(e){var r=!0,n=!1,t=void 0;try{for(var a,s=x()[Symbol.iterator]();!(r=(a=s.next()).done);r=!0){var i=a.value,o=!0,c=!1,l=void 0;try{for(var d,u=i.subCategories[Symbol.iterator]();!(o=(d=u.next()).done);o=!0){var h=d.value;if(h.id===e)return h}}catch(m){c=!0,l=m}finally{try{o||null==u.return||u.return()}finally{if(c)throw l}}}}catch(m){n=!0,t=m}finally{try{r||null==s.return||s.return()}finally{if(n)throw t}}throw new Error("Invalid subCategoryId")}}}]);
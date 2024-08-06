import{f as U,a as O,u as D,e as R}from"./links.Byq_3x2e.js";import{A as G}from"./AddonConditions.CsIPzIpA.js";import{A as I,T as x}from"./TitleDescription.Gi4Dar4g.js";import{B as L}from"./RadioToggle.CaTwJt--.js";import{C as N}from"./Card.D52fee8h.js";import{C as F}from"./Tabs.BKGFcDsj.js";import{C as E}from"./ProBadge.CVd2ImKm.js";import{C as P}from"./SettingsRow.BwYvQArk.js";import{_ as T}from"./_plugin-vue_export-helper.BN1snXvA.js";import{o as i,c as b,v as o,k as u,l as s,a as r,B as a,b as f,C as S,t as p,F as k,J as w,Y as M,G as V,q as K,T as j}from"./runtime-dom.esm-bundler.tPRhSV4q.js";import{C as q,S as z}from"./Schema.B-6drJLK.js";import{B as H}from"./Checkbox.CmdF-nFt.js";import{C as W}from"./Blur.CvHKqkVq.js";import{C as J}from"./HtmlTagsEditor.DEcLTU4G.js";import{G as Y,a as Q}from"./Row.DRnp1mVs.js";import{R as X}from"./RequiredPlans.BaQ2NBS5.js";import{C as Z}from"./Index.Cf5ujj4F.js";import{P as tt}from"./PostTypes.Cef6XkQ_.js";import"./default-i18n.DXRQgkn2.js";import"./helpers.CXsRrhc8.js";import"./addons.LwNCCWfH.js";import"./upperFirst.yVnsg4QL.js";import"./_stringToArray.DnK4tKcY.js";import"./toString.zLSwYOtv.js";import"./Caret.Ke5gylGO.js";import"./JsonValues.D25FTfEu.js";import"./MaxCounts.DHV7qSQX.js";import"./RobotsMeta.DNT5yqf9.js";import"./Editor.CI-FZyFJ.js";import"./isEqual.DkU1ezAe.js";import"./_baseIsEqual.MNbeg0L2.js";import"./_getTag.BWQxgJie.js";import"./_baseClone.Cq_cqRLS.js";import"./_arrayEach.Fgt6pfHj.js";import"./index.Dbgw3oZ8.js";import"./Tags.DAtAys4G.js";import"./postSlug.D7DEP4-b.js";import"./metabox.BEL0zdkw.js";import"./cleanForSlug.BVGRQ_59.js";import"./_baseTrim.BYZhh0MR.js";import"./_baseSet.rYV3oc6X.js";import"./GoogleSearchPreview.buqqHJAY.js";import"./constants.CPpKID74.js";import"./Tooltip.DhkkBQWW.js";import"./Slide.fjAuzpC8.js";import"./TruSeoScore.DmC22Awy.js";import"./Ellipse.CMQFf36o.js";import"./Information.Bv8uKEyF.js";import"./Textarea.BItFOv10.js";import"./Checkmark.DOG99yeO.js";import"./UnfilteredHtml.CxOkHAWj.js";import"./license.Cml-S8vw.js";const et={};function st(e,n){return i(),b("div")}const at=T(et,[["render",st]]),ot={components:{BaseCheckbox:H,BaseRadioToggle:L,CoreBlur:W,CoreHtmlTagsEditor:J,CoreSettingsRow:P,GridColumn:Y,GridRow:Q},data(){return{stripPunctuationSettings:[{value:"dashes",label:this.$t.__("Dashes (-)",this.$td)},{value:"underscores",label:this.$t.__("Underscores (_)",this.$td)},{value:"numbers",label:this.$t.__("Numbers (0-9)",this.$td)},{value:"plus",label:this.$t.__("Plus (+)",this.$td)},{value:"apostrophe",label:this.$t.__("Apostrophe (')",this.$td)},{value:"pound",label:this.$t.__("Pound (#)",this.$td)},{value:"ampersand",label:this.$t.__("Ampersand (&)",this.$td)}],strings:{attributeFormat:this.$t.sprintf(this.$t.__("%1$s Format",this.$td),this.$t.__("Title",this.$td)),clickToAddTags:this.$t.sprintf(this.$t.__("Click on the tags below to insert variables into your %1$s attribute.",this.$td),this.$t.__("Title",this.$td).toLowerCase()),stripPunctuation:this.$t.__("Strip Punctuation",this.$td),punctuationCharactersToKeep:this.$t.__("Punctuation Characters to Keep:",this.$td),casing:this.$t.__("Casing",this.$td),casingDescription:this.$t.__("Choose which casing should be applied to the attribute.",this.$td),wordsToStrip:this.$t.__("Words to Strip",this.$td),autogenerate:this.$t.sprintf(this.$t.__("Autogenerate %1$s on Upload",this.$td),this.$t.__("Title",this.$td))},tags:{title:{context:"imageSeoTitle",default:["image_title","separator_sa","site_title"]},altTag:{context:"imageSeoAlt",default:["alt_tag","separator_sa","site_title"]},caption:{context:"imageSeoCaption",default:["attachment_caption","separator_sa","site_title"]},description:{context:"imageSeoDescription",default:["attachment_description","separator_sa","site_title"]}},casings:{lowerCase:{label:this.$t.__("Lower Case",this.$td),description:this.$t.__("All letters are converted to lower case (small) letters.",this.$td)},titleCase:{label:this.$t.__("Title Case",this.$td),description:this.$t.__("Major words are capitalized and minor words remain in their original casing.",this.$td)},sentenceCase:{label:this.$t.__("Sentence Case",this.$td),description:this.$t.__("The first word of each sentence starts with a capital.",this.$td)}}}},props:{activeTab:Object}},it={class:"aioseo-sa-image-seo"},nt={class:"global-robots-settings aioseo-description"},rt={class:"aioseo-description"},lt=r("br",null,null,-1),ct={class:"casing-options"};function pt(e,n,y,c,t,l){const d=o("base-radio-toggle"),_=o("core-settings-row"),h=o("core-html-tags-editor"),$=o("base-checkbox"),v=o("grid-column"),C=o("grid-row"),A=o("core-blur");return i(),u(A,null,{default:s(()=>[r("div",it,[["caption","description"].includes("title")?(i(),u(_,{key:0,name:t.strings.autogenerate,align:""},{content:s(()=>[a(d,{name:"autogenerate",options:[{label:e.$constants.GLOBAL_STRINGS.disabled,value:!1,activeClass:"dark"},{label:e.$constants.GLOBAL_STRINGS.enabled,value:!0}]},null,8,["options"])]),_:1},8,["name"])):f("",!0),a(_,{name:t.strings.attributeFormat},{content:s(()=>[a(h,{"line-numbers":!1,single:"","tags-context":t.tags.title.context,"default-tags":t.tags.title.default},{"tags-description":s(()=>[S(p(t.strings.clickToAddTags),1)]),_:1},8,["tags-context","default-tags"])]),_:1},8,["name"]),a(_,{name:t.strings.stripPunctuation,align:""},{content:s(()=>[a(d,{name:"stripPunctuation",options:[{label:e.$constants.GLOBAL_STRINGS.disabled,value:!1,activeClass:"dark"},{label:e.$constants.GLOBAL_STRINGS.enabled,value:!0}]},null,8,["options"]),r("div",nt,[r("strong",null,p(t.strings.punctuationCharactersToKeep),1),a(C,{class:"settings"},{default:s(()=>[(i(!0),b(k,null,w(t.stripPunctuationSettings,(g,m)=>(i(),u(v,{key:m,xl:"3",md:"4",sm:"6"},{default:s(()=>[a($,{size:"medium"},{default:s(()=>[S(p(g.label),1)]),_:2},1024)]),_:2},1024))),128))]),_:1})])]),_:1},8,["name"]),a(_,{name:t.strings.casing,align:""},{content:s(()=>[a(d,{name:"casing",options:[{label:e.$constants.GLOBAL_STRINGS.disabled,value:"",activeClass:"dark"},{label:t.casings.lowerCase.label,value:"lower"},{label:t.casings.titleCase.label,value:"title"},{label:t.casings.sentenceCase.label,value:"sentence"}]},null,8,["options"]),r("div",rt,[r("span",null,p(t.strings.casingDescription),1),lt,r("ul",ct,[(i(!0),b(k,null,w(t.casings,(g,m)=>(i(),b("li",{key:m},[r("span",null,p(g.label),1),r("span",null,p(g.description),1)]))),128))])])]),_:1},8,["name"])])]),_:1})}const mt=T(ot,[["render",pt]]),_t={setup(){return{licenseStore:U()}},components:{Blur:mt,RequiredPlans:X,Cta:Z},data(){return{strings:{titleAttributeFormat:this.$t.__("Title Attribute Format",this.$td),ctaDescription:this.$t.__("The Image SEO module is a premium feature that enables you to globally control the title, alt tag, caption, description and filename of the images on your site.",this.$td),ctaButtonText:this.$t.__("Unlock Image SEO",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Image SEO is a %1$s Feature",this.$td),"PRO")},features:[this.$t.__("Autogenerate image attributes",this.$td),this.$t.__("Clean uploaded image filenames",this.$td),this.$t.__("Strip punctuation from image attributes",this.$td),this.$t.__("Convert casing of image attributes",this.$td)]}}},ut={class:"aioseo-sa-image-seo"};function dt(e,n,y,c,t,l){const d=o("blur"),_=o("required-plans"),h=o("cta");return i(),b("div",ut,[a(d),a(h,{"cta-link":e.$links.getPricingUrl("image-seo","image-seo-upsell"),"button-text":t.strings.ctaButtonText,"learn-more-link":e.$links.getUpsellUrl("image-seo",null,e.$isPro?"pricing":"liteUpgrade"),"feature-list":t.features,"hide-bonus":!c.licenseStore.isUnlicensed},{"header-text":s(()=>[S(p(t.strings.ctaHeader),1)]),description:s(()=>[a(_,{addon:"aioseo-image-seo"}),S(" "+p(t.strings.ctaDescription),1)]),_:1},8,["cta-link","button-text","learn-more-link","feature-list","hide-bonus"])])}const B=T(_t,[["render",dt],["__scopeId","data-v-7fc5d2be"]]),ht={setup(){return{optionsStore:O(),rootStore:D(),settingsStore:R()}},mixins:[G,tt],components:{Advanced:I,BaseRadioToggle:L,CoreCard:N,CoreMainTabs:F,CoreProBadge:E,CoreSettingsRow:P,Cta:at,CustomFields:q,ImageSeo:B,Lite:B,Schema:z,TitleDescription:x},data(){return{imageSeoKey:0,addonSlug:"aioseo-image-seo",internalDebounce:!1,imageSeoActiveTab:{slug:"title",name:this.$t.__("Title",this.$td),pro:!0},strings:{redirectAttachmentUrls:this.$t.__("Redirect Attachment URLs",this.$td),attachment:this.$t.__("Attachment",this.$td),attachmentParent:this.$t.__("Attachment Parent",this.$td),attachmentUrlsDescription:this.$t.__("We recommended redirecting attachment URLs back to the attachment since the default WordPress attachment pages have little SEO value.",this.$td),imageSeo:this.$t.__("Image SEO",this.$td),advancedSettings:this.$t.__("Advanced Settings",this.$td)},tabs:{attachments:[{slug:"title-description",name:this.$t.__("Title & Description",this.$td),access:"aioseo_search_appearance_settings",pro:!1},{slug:"Schema",name:this.$t.__("Schema Markup",this.$td),access:"aioseo_search_appearance_settings",pro:!0},{slug:"advanced",name:this.$t.__("Advanced",this.$td),access:"aioseo_search_appearance_settings",pro:!1}],imageSeo:[{slug:"title",name:this.$t.__("Title",this.$td),pro:!0},{slug:"altTag",name:this.$t.__("Alt Tag",this.$td),pro:!0},{slug:"caption",name:this.$t.__("Caption",this.$td),pro:!0},{slug:"description",name:this.$t.__("Description",this.$td),pro:!0},{slug:"filename",name:this.$t.__("Filename",this.$td),pro:!0}]}}},computed:{postType(){return this.rootStore.aioseo.postData.postTypes.filter(e=>e.name==="attachment")[0]}},methods:{processChangeTab(e,n){this.internalDebounce||(this.internalDebounce=!0,this.settingsStore.changeTab({slug:`${e}SA`,value:n}),setTimeout(()=>{this.internalDebounce=!1},50))},setImageSeoActiveTab(e){this.imageSeoActiveTab=this.tabs.imageSeo.find(n=>n.slug===e),this.imageSeoKey++}}},gt={class:"aioseo-search-appearance-content-types"},bt={class:"aioseo-description"};function ft(e,n,y,c,t,l){const d=o("base-radio-toggle"),_=o("core-settings-row"),h=o("core-main-tabs"),$=o("core-card"),v=o("core-pro-badge"),C=o("image-seo"),A=o("cta"),g=o("lite");return i(),b("div",gt,[a($,{slug:`${l.postType.name}SA`},M({header:s(()=>[r("div",{class:V(["icon dashicons",e.getPostIconClass(l.postType.icon)])},null,2),r("div",null,p(l.postType.label),1)]),"before-tabs":s(()=>[a(_,{name:t.strings.redirectAttachmentUrls,align:""},{content:s(()=>[a(d,{modelValue:c.optionsStore.dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls,"onUpdate:modelValue":n[0]||(n[0]=m=>c.optionsStore.dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls=m),name:"redirectAttachmentUrls",options:[{label:e.$constants.GLOBAL_STRINGS.disabled,value:"disabled",activeClass:"dark"},{label:t.strings.attachment,value:"attachment"},{label:t.strings.attachmentParent,value:"attachment_parent"}]},null,8,["modelValue","options"]),r("div",bt,p(t.strings.attachmentUrlsDescription),1)]),_:1},8,["name"])]),default:s(()=>[c.optionsStore.dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls==="disabled"?(i(),u(j,{key:0,name:"route-fade",mode:"out-in"},{default:s(()=>[(i(),u(K(c.settingsStore.settings.internalTabs[`${l.postType.name}SA`]),{object:l.postType,separator:c.optionsStore.options.searchAppearance.global.separator,options:c.optionsStore.dynamicOptions.searchAppearance.postTypes[l.postType.name],type:"postTypes"},null,8,["object","separator","options"]))]),_:1})):f("",!0)]),_:2},[c.optionsStore.dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls==="disabled"?{name:"tabs",fn:s(()=>[a(h,{tabs:t.tabs.attachments,showSaveButton:!1,active:c.settingsStore.settings.internalTabs[`${l.postType.name}SA`],internal:"",onChanged:n[1]||(n[1]=m=>l.processChangeTab(l.postType.name,m))},null,8,["tabs","active"])]),key:"0"}:void 0]),1032,["slug"]),a($,{slug:"imageSeo",noSlide:!e.shouldShowMain},{header:s(()=>[r("span",null,p(t.strings.imageSeo),1),a(v)]),tabs:s(()=>[a(h,{tabs:t.tabs.imageSeo,showSaveButton:!1,active:t.imageSeoActiveTab.slug,internal:"",onChanged:n[2]||(n[2]=m=>l.setImageSeoActiveTab(m))},null,8,["tabs","active"])]),default:s(()=>[e.shouldShowMain?(i(),u(C,{activeTab:t.imageSeoActiveTab,key:t.imageSeoKey},null,8,["activeTab"])):f("",!0),e.shouldShowUpdate||e.shouldShowActivate?(i(),u(A,{key:1})):f("",!0),e.shouldShowLite?(i(),u(g,{key:2})):f("",!0)]),_:1},8,["noSlide"])])}const be=T(ht,[["render",ft]]);export{be as default};

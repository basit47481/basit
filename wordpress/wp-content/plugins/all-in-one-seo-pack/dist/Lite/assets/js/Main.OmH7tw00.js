import{f as i,a as e,g as p,h as s}from"./links.Byq_3x2e.js";import m from"./AdditionalInformation.OHeR94Vh.js";import n from"./Category.CB-X2hMz.js";import a from"./Features.CI9bNOkA.js";import c from"./Import.lQOuIIP3.js";import l from"./LicenseKey.Korf-A5y.js";import u from"./SearchAppearance.DCoXM1lj.js";import f from"./SearchConsole.CRFv93pS.js";import S from"./SmartRecommendations.DslgXu_Y.js";import d from"./Success.sDQPhO1q.js";import h from"./Welcome.BL6d0N6i.js";import{_}from"./_plugin-vue_export-helper.BN1snXvA.js";import{k as g,q as y,o as z}from"./runtime-dom.esm-bundler.tPRhSV4q.js";import"./default-i18n.DXRQgkn2.js";import"./helpers.CXsRrhc8.js";import"./Wizard.BEqzy4h5.js";import"./addons.LwNCCWfH.js";import"./upperFirst.yVnsg4QL.js";import"./_stringToArray.DnK4tKcY.js";import"./toString.zLSwYOtv.js";import"./MaxCounts.DHV7qSQX.js";import"./Phone.BO8qqKj4.js";import"./preload-helper.M0ZNWaht.js";import"./RadioToggle.CaTwJt--.js";import"./HtmlTagsEditor.DEcLTU4G.js";import"./Editor.CI-FZyFJ.js";import"./isEqual.DkU1ezAe.js";import"./_baseIsEqual.MNbeg0L2.js";import"./_getTag.BWQxgJie.js";import"./_baseClone.Cq_cqRLS.js";import"./_arrayEach.Fgt6pfHj.js";import"./index.Dbgw3oZ8.js";import"./Caret.Ke5gylGO.js";import"./UnfilteredHtml.CxOkHAWj.js";import"./ImageUploader.CBapwz_l.js";import"./Img.fGyIsoH4.js";import"./Plus.CG1QxokA.js";import"./SocialProfiles.BnExPpom.js";import"./Checkbox.CmdF-nFt.js";import"./Checkmark.DOG99yeO.js";import"./Textarea.BItFOv10.js";import"./SettingsRow.BwYvQArk.js";import"./Row.DRnp1mVs.js";import"./Facebook.BANkQ8lL.js";import"./Twitter.B1Gw9Cwq.js";import"./Header.DoNcTxoB.js";import"./Logo.bX-u9KVJ.js";import"./CloseAndExit.BO2Zlnlw.js";import"./Index.CXKd2N9v.js";import"./Steps.Bo_06D0i.js";import"./HighlightToggle.BSgW2-gF.js";import"./ImageSeo.BcdOt5T9.js";import"./ProBadge.CVd2ImKm.js";import"./popup.6pJEdp0g.js";import"./params.B3T1WKlC.js";import"./Tags.DAtAys4G.js";import"./postSlug.D7DEP4-b.js";import"./metabox.BEL0zdkw.js";import"./cleanForSlug.BVGRQ_59.js";import"./_baseTrim.BYZhh0MR.js";import"./_baseSet.rYV3oc6X.js";import"./GoogleSearchPreview.buqqHJAY.js";import"./constants.CPpKID74.js";import"./PostTypeOptions.CGkgIKhQ.js";import"./Tooltip.DhkkBQWW.js";import"./PostTypes.Cef6XkQ_.js";import"./SearchConsole.CNymtxyF.js";import"./GoogleSearchConsole.59ciZKmk.js";import"./ConnectGoogleSearchConsole.Ptco2eVz.js";import"./Book.Cd0O52yE.js";import"./VideoCamera.DKqep10A.js";const x={setup(){return{licenseStore:i(),optionsStore:e(),searchStatisticsStore:p(),setupWizardStore:s()}},components:{AdditionalInformation:m,Category:n,Features:a,Import:c,LicenseKey:l,SearchAppearance:u,SearchConsole:f,SmartRecommendations:S,Success:d,Welcome:h},methods:{deleteStage(t){const o=this.setupWizardStore.stages.findIndex(r=>t===r);o!==-1&&this.setupWizardStore.stages.splice(o,1)}},mounted(){if(this.optionsStore.internalOptions.internal.wizard){const t=JSON.parse(this.optionsStore.internalOptions.internal.wizard);delete t.currentStage,delete t.stages,delete t.licenseKey,this.setupWizardStore.loadState(t)}this.setupWizardStore.shouldShowImportStep||this.deleteStage("import"),this.licenseStore.isUnlicensed||this.deleteStage("license-key"),this.searchStatisticsStore.isConnected&&this.deleteStage("search-console"),this.$isPro&&this.deleteStage("smart-recommendations")}};function W(t,o,r,$,A,k){return z(),g(y(t.$route.name))}const bt=_(x,[["render",W]]);export{bt as default};
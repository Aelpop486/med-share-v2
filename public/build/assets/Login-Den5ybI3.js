import{l as y,w as x,m as k,o as c,c as g,T as C,a as b,d as f,e as u,f as l,g as t,Z as B,t as M,k as _,h as e,j as V,v as z,p as P,q as w,i as p,n as j}from"./app-BfXs-XMO.js";import{_ as q}from"./GuestLayout-C_EUQW8C.js";import{_ as v}from"./InputError-CntAulRH.js";import{P as D}from"./PrimaryButton-Dhg5gX39.js";import"./Navbar-e_msdUdZ.js";import"./IMG_1525-93Jb5LtC.js";import"./DarkMode-Bco3ndNc.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";import"./index-BIUDqRGO.js";import"./Footer-BJT48aVA.js";const L=["value"],S={__name:"Checkbox",props:{checked:{type:[Array,Boolean],required:!0},value:{default:null}},emits:["update:checked"],setup(a,{emit:s}){const h=s,r=a,i=y({get(){return r.checked},set(m){h("update:checked",m)}});return(m,d)=>x((c(),g("input",{type:"checkbox",value:a.value,"onUpdate:modelValue":d[0]||(d[0]=o=>i.value=o),class:"rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-blue-600 shadow-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800"},null,8,L)),[[k,i.value]])}},T={key:0,class:"mb-4 font-medium text-sm text-green-600"},U={class:"font-[sans-serif] text-[#333] dark:bg-gray-900 dark:text-white"},E={class:"min-h-screen flex fle-col items-center justify-center py-6 px-4"},N={class:"grid md:grid-cols-2 items-center gap-4 max-w-7xl w-full"},R={class:"border border-gray-300 rounded-md p-6 max-w-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] max-md:mx-auto"},$=e("div",{class:"mb-10"},[e("h3",{class:"text-3xl font-extrabold"},"Log in"),e("p",{class:"text-sm mt-4"},"Log in to your account and explore a world of possibilities. Your journey begins here.")],-1),H=e("label",{class:"text-sm mb-2 block"},"User name",-1),F={class:"relative flex items-center"},A=e("svg",{xmlns:"http://www.w3.org/2000/svg",fill:"#bbb",stroke:"#bbb",class:"w-[18px] h-[18px] absolute right-4",viewBox:"0 0 24 24"},[e("circle",{cx:"10",cy:"7",r:"6","data-original":"#000000"}),e("path",{d:"M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z","data-original":"#000000"})],-1),Y=e("label",{class:"text-sm mb-2 block"},"Password",-1),Z={class:"relative flex items-center"},G=["type"],I=e("path",{d:"M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z","data-original":"#000000"},null,-1),J=[I],K={class:"flex items-center justify-between gap-2"},O={class:"flex items-center"},Q=e("label",{for:"remember-me",class:"ml-3 block text-sm"}," Remember me ",-1),W={class:"text-sm"},X={class:"!mt-10"},ee={class:"text-sm !mt-10 text-center"},se=e("div",{class:"lg:h-[400px] md:h-[300px] max-md:mt-10"},[e("img",{src:"https://readymadeui.com/login-image.webp",class:"w-full h-full object-cover",alt:"Dining Experience"})],-1),ue={__name:"Login",props:{canResetPassword:{type:Boolean},status:{type:String}},setup(a){const s=C({email:"",password:"",remember:!1}),h=()=>{s.post(route("login"),{onFinish:()=>s.reset("password")})};b("");const r=b("password"),i=b("Show");function m(){r.value==="password"?(r.value="text",i.value="Hide"):(r.value="password",i.value="Show")}return(d,o)=>(c(),f(q,null,{default:u(()=>[l(t(B),{title:"Log in"}),a.status?(c(),g("div",T,M(a.status),1)):_("",!0),e("div",U,[e("div",E,[e("div",N,[e("div",R,[e("form",{onSubmit:V(h,["prevent"]),class:"space-y-6"},[$,e("div",null,[H,e("div",F,[x(e("input",{id:"email",type:"email","onUpdate:modelValue":o[0]||(o[0]=n=>t(s).email=n),required:"",autofocus:"",autocomplete:"username",class:"w-full text-sm border border-gray-300 px-4 py-3 rounded-md outline-[#333]",placeholder:"Enter user name"},null,512),[[z,t(s).email]]),A]),l(v,{class:"mt-2",message:t(s).errors.email},null,8,["message"])]),e("div",null,[Y,e("div",Z,[x(e("input",{type:r.value,id:"password","onUpdate:modelValue":o[1]||(o[1]=n=>t(s).password=n),required:"",autocomplete:"current-password",class:"w-full text-sm border border-gray-300 px-4 py-3 rounded-md outline-[#333]",placeholder:"Enter password"},null,8,G),[[P,t(s).password]]),(c(),g("svg",{onClick:m,xmlns:"http://www.w3.org/2000/svg",fill:"#bbb",stroke:"#bbb",class:"w-[18px] h-[18px] absolute right-4 cursor-pointer",viewBox:"0 0 128 128"},J))]),l(v,{class:"mt-2",message:t(s).errors.password},null,8,["message"])]),e("div",K,[e("div",O,[l(S,{name:"remember",checked:t(s).remember,"onUpdate:checked":o[2]||(o[2]=n=>t(s).remember=n)},null,8,["checked"]),Q]),e("div",W,[a.canResetPassword?(c(),f(t(w),{key:0,href:d.route("password.request"),class:"text-blue-600 hover:underline"},{default:u(()=>[p(" Forgot your password? ")]),_:1},8,["href"])):_("",!0)])]),e("div",X,[l(D,{class:j({"opacity-25":t(s).processing}),disabled:t(s).processing},{default:u(()=>[p(" Log in ")]),_:1},8,["class","disabled"])]),e("p",ee,[p("Don't have an account "),l(t(w),{href:d.route("register"),class:"text-blue-600 hover:underline ml-1 whitespace-nowrap"},{default:u(()=>[p("Register here")]),_:1},8,["href"])])],32)]),se])])])]),_:1}))}};export{ue as default};

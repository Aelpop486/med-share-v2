import{T as u,o as i,c as p,w as l,a as o,u as s,Z as _,f as g,t as f,g as h,b as e,d,e as b,h as w,v as x,n as y}from"./app-xfYODjfb.js";import{_ as k}from"./GuestLayout-D7vRP84I.js";import{_ as v}from"./InputError-v9vYP2Gr.js";import{P as B}from"./PrimaryButton-By875R6Z.js";import"./Navbar-EGc5U_xI.js";import"./IMG_1525-93Jb5LtC.js";import"./index-Bp9WpJq9.js";import"./DarkMode-DbSb6ds5.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";import"./Footer-B27xNF57.js";const N={key:0,class:"mb-4 font-medium text-sm text-green-600 dark:text-green-400"},P={class:"w-full max-w-md mx-auto p-6"},V={class:"mt-7 bg-white rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700 border-2 border-indigo-300"},F={class:"p-4 sm:p-7"},C={class:"text-center"},E=e("h1",{class:"block text-2xl font-bold text-gray-800 dark:text-white"}," Forgot password? ",-1),S={class:"mt-2 text-sm text-gray-600 dark:text-gray-400"},T=["href"],D={class:"mt-5"},L={class:"grid gap-y-4"},M=e("label",{for:"email",class:"block text-sm font-bold ml-1 mb-2 dark:text-white"},"Email address",-1),$={class:"relative"},I={__name:"ForgotPassword",props:{status:{type:String}},setup(a){const t=u({email:""}),m=()=>{t.post(route("password.email"))};return(n,r)=>(i(),p(k,null,{default:l(()=>[o(s(_),{title:"Forgot Password"}),a.status?(i(),g("div",N,f(a.status),1)):h("",!0),e("div",P,[e("div",V,[e("div",F,[e("div",C,[E,e("p",S,[d(" Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. "),e("a",{class:"text-blue-600 decoration-2 hover:underline font-medium",href:n.route("login")}," Login here ",8,T)])]),e("div",D,[e("form",{onSubmit:b(m,["prevent"])},[e("div",L,[e("div",null,[M,e("div",$,[w(e("input",{id:"email",type:"email","onUpdate:modelValue":r[0]||(r[0]=c=>s(t).email=c),required:"",autofocus:"",autocomplete:"username",class:"py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm"},null,512),[[x,s(t).email]]),o(v,{class:"mt-2",message:s(t).errors.email},null,8,["message"])])]),o(B,{class:y({"opacity-25":s(t).processing}),disabled:s(t).processing},{default:l(()=>[d(" Email Password Reset Link ")]),_:1},8,["class","disabled"])])],32)])])])])]),_:1}))}};export{I as default};

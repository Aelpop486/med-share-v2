import{T as p,o as g,d as b,e as f,f as a,g as s,Z as w,h as e,j as k,w as d,v as l,n as x,i as y}from"./app-BfXs-XMO.js";import{_ as h}from"./GuestLayout-C_EUQW8C.js";import{_ as i}from"./InputError-CntAulRH.js";import"./Navbar-e_msdUdZ.js";import"./IMG_1525-93Jb5LtC.js";import"./DarkMode-Bco3ndNc.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";import"./index-BIUDqRGO.js";import"./Footer-BJT48aVA.js";const _={class:"flex flex-col items-center pt-6 mb-5"},v={class:"w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700"},P={class:"p-6 space-y-4 md:space-y-6 sm:p-8"},V=e("h1",{class:"text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white"}," Reset Password ",-1),q=e("label",{for:"email",class:"block mb-2 text-sm font-medium text-gray-900 dark:text-white"},"Email",-1),E=e("label",{for:"password",class:"block mb-2 text-sm font-medium text-gray-900 dark:text-white"},"Password",-1),R=e("label",{for:"password",class:"block mb-2 text-sm font-medium text-gray-900 dark:text-white"},"Password Confirmation",-1),B=["disabled"],C={class:"text-sm font-light text-gray-500 dark:text-gray-400"},N=["href"],D={__name:"ResetPassword",props:{email:{type:String,required:!0},token:{type:String,required:!0}},setup(u){const n=u,r=p({token:n.token,email:n.email,password:"",password_confirmation:""}),m=()=>{r.post(route("password.store"),{onFinish:()=>r.reset("password","password_confirmation")})};return(c,o)=>(g(),b(h,null,{default:f(()=>[a(s(w),{title:"Reset Password"}),e("section",_,[e("div",v,[e("div",P,[V,e("form",{class:"space-y-4 md:space-y-6",onSubmit:k(m,["prevent"])},[e("div",null,[q,d(e("input",{"onUpdate:modelValue":o[0]||(o[0]=t=>s(r).email=t),required:"",autofocus:"",autocomplete:"username",type:"email",name:"email",id:"email",class:"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",placeholder:"Enter Your Email"},null,512),[[l,s(r).email]]),a(i,{class:"mt-2",message:s(r).errors.password_confirmation},null,8,["message"])]),e("div",null,[E,d(e("input",{id:"password",type:"password","onUpdate:modelValue":o[1]||(o[1]=t=>s(r).password=t),required:"",autocomplete:"new-password",placeholder:"Enter Your password",class:"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"},null,512),[[l,s(r).password]]),a(i,{class:"mt-2",message:s(r).errors.password},null,8,["message"])]),e("div",null,[R,d(e("input",{id:"password_confirmation",type:"password","onUpdate:modelValue":o[2]||(o[2]=t=>s(r).password_confirmation=t),required:"",autocomplete:"new-password",placeholder:"password_confirmation",class:"bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"},null,512),[[l,s(r).password_confirmation]]),a(i,{class:"mt-2",message:s(r).errors.password_confirmation},null,8,["message"])]),e("button",{class:x([{"opacity-25":s(r).processing},"w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"]),disabled:s(r).processing,type:"submit"}," Reset Password ",10,B),e("p",C,[y(" Already have an account? "),e("a",{class:"font-medium text-blue-600 hover:underline dark:text-blue-500",href:c.route("login")},"Log in here",8,N)])],32)])])])]),_:1}))}};export{D as default};

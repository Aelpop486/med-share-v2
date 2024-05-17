import{T as i,o as n,f as c,b as e,e as g,u as o,h as s,v as d,d as u}from"./app-xfYODjfb.js";import{_ as m}from"./AdminsLayout-BnUxbHtE.js";import"./IMG_1525-93Jb5LtC.js";import"./index-Bp9WpJq9.js";const p={class:"container px-5 py-24 mx-auto flex"},b={class:"lg:w-4/6 mx-auto"},y={class:"flex-col justify-center sm:flex-row mt-10 rounded-2xl bg-white"},f={class:"text-center sm:pr-8 sm:py-8"},x={class:"flex flex-col justify-center mb-4"},k=e("div",{class:"shrink-0 mb-6 justify-center flex"},[e("img",{class:"h-20 w-20 bg-slate-300 object-cover rounded-full",src:"",alt:""})],-1),h=e("label",{class:"mb-2 text-sm font-medium text-gray-900 dark:text-white",for:"file_input"},"Upload Photo",-1),_={class:"grid gap-4 mb-4 grid-cols-2"},w={class:"col-span-2"},v=e("label",{for:"name",class:"block mb-2 text-sm font-medium text-gray-900 dark:text-white"},"Name",-1),V={class:"col-span-2"},U=e("label",{for:"Email",class:"block mb-2 text-sm font-medium text-gray-900 dark:text-white"},"Email",-1),E={class:"col-span-2"},j=e("label",{for:"address",class:"block mb-2 text-sm font-medium text-gray-900 dark:text-white"},"Address",-1),N={class:"col-span-2"},T=e("label",{for:"language",class:"block mb-2 text-sm font-medium text-gray-900 dark:text-white"},"Language",-1),q={class:"col-span-2"},B=e("label",{for:"description",class:"block mb-2 text-sm font-medium text-gray-900 dark:text-white"}," Notes",-1),C=e("button",{type:"submit",class:"text-white inline-flex w-full items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"},[e("svg",{class:"me-1 -ms-1 w-5 h-5",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[e("path",{"fill-rule":"evenodd",d:"M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z","clip-rule":"evenodd"})]),u(" Create ")],-1),F=Object.assign({layout:m},{__name:"create",setup(M){const r=i({name:"",email:"",address:"",role:"",description:"",image:"",language:""}),l=()=>{r.post(route("users.store"),{onFinish:()=>Swal.fire("Created successfully","","success")})};return(L,t)=>(n(),c("div",p,[e("div",b,[e("div",y,[e("div",f,[e("form",{class:"p-4 md:p-5",onSubmit:g(l,["prevent"])},[e("div",x,[k,h,e("input",{class:"mb-2 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400",id:"file_input",type:"file",onInput:t[0]||(t[0]=a=>o(r).image=a.target.files[0])},null,32)]),e("div",_,[e("div",w,[v,s(e("input",{"onUpdate:modelValue":t[1]||(t[1]=a=>o(r).name=a),type:"text",name:"name",id:"name",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500",placeholder:"Type User Name",required:""},null,512),[[d,o(r).name]])]),e("div",V,[U,s(e("input",{"onUpdate:modelValue":t[2]||(t[2]=a=>o(r).email=a),type:"text",name:"Email",id:"Email",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500",placeholder:"Type Email",required:""},null,512),[[d,o(r).email]])]),e("div",E,[j,s(e("input",{"onUpdate:modelValue":t[3]||(t[3]=a=>o(r).address=a),type:"text",name:"address",id:"address",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500",placeholder:"area",required:""},null,512),[[d,o(r).address]])]),e("div",N,[T,s(e("input",{"onUpdate:modelValue":t[4]||(t[4]=a=>o(r).language=a),type:"text",name:"language",id:"language",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500",placeholder:"Language",required:""},null,512),[[d,o(r).language]])]),e("div",q,[B,s(e("textarea",{"onUpdate:modelValue":t[5]||(t[5]=a=>o(r).description=a),id:"description",rows:"4",class:"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",placeholder:"Write product description here"},null,512),[[d,o(r).description]])])]),C],32)])])])]))}});export{F as default};

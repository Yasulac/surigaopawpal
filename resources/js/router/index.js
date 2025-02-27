import { createRouter, createWebHistory } from 'vue-router'

// Import views
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import PetView from '@/views/PetView.vue'
import GivePetView from '@/views/GivePetView.vue'
import GuideView from '@/views/GuideView.vue'
import LogInView from '@/views/LogInView.vue'
import AdminView from '@/views/AdminView.vue'
import AdminUserView from '@/views/AdminUserView.vue'
import AdminPetView from '@/views/AdminPetView.vue'
import AdminAdoptApplicationView from '@/views/AdminAdoptApplicationView.vue'
import AdminSignUpView from '@/views/AdminSignUpView.vue'
import AdminSignInView from '@/views/AdminSignInView.vue'
import ProfilePetView from '@/views/ProfilePetView.vue'
import AdoptionFormView from '@/views/AdoptionFormView.vue'
import ContactUsView from '@/views/ContactUsView.vue'
import SignUpView from '@/views/SignUpView.vue'
import ProfileView from '@/views/ProfileView.vue'
import UserCreate from '@/components/UserCreate.vue'
import UserEdit from '@/components/UserEdit.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    { path: '/', name: 'home', component: HomeView },
    { path: '/about', name: 'about', component: AboutView },
    { path: '/petview', name: 'PetView', component: PetView },
    { path: '/givepetview', name: 'GivePetView', component: GivePetView },
    { path: '/guideview', name: 'GuideView', component: GuideView },
    { path: '/signupview', name: 'SignUpView', component: SignUpView },
    { path: '/loginview', name: 'LogInView', component: LogInView },
    { path: '/adminview', name: 'AdminView', component: AdminView },
    { path: '/adminuserview', name: 'AdminUserView', component: AdminUserView },
    { path: '/adminpetview', name: 'AdminPetView', component: AdminPetView },
    { path: '/adminadoptapplicationview', name: 'AdminAdoptApplicationView', component: AdminAdoptApplicationView },
    { path: '/adminsignupview', name: 'AdminSignUpView', component: AdminSignUpView },
    { path: '/adminsigninview', name: 'AdminSignInView', component: AdminSignInView },
    { path: '/profilepetview', name: 'ProfilePetView', component: ProfilePetView },
    { path: '/adoption-form/:pet_id', name: 'AdoptionFormView', component: AdoptionFormView, props: true },
    { path: '/contactusview', name: 'ContactUsView', component: ContactUsView },
    { path: '/profileview', name: 'ProfileView', component: ProfileView },
    { path: '/admin/users/:id/edit', name: "UserEdit", component: UserEdit },
    { path: '/admin/users/create', name: "UserCreate", component: UserCreate },
    { path: '/pet/:pet_id', name: 'PetProfile', component: () => import('@/views/ProfilePetView.vue') }
  ]
})

export default router

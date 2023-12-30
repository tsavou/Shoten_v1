<template>
  <main>
    <div class="background-image"></div>
    <NuxtLink to="/"><IconsBackArrow /></NuxtLink>
    <div class="top-page">
      <img
        src="/img/logos/shoten-transparent.png"
        alt="Logo Shoten"
        class="logo-shoten-top"
      />
      <div class="titles">
        <h1>ログイン</h1>
        <h2>Inscription</h2>
      </div>
    </div>
    <div class="register-wrapper">
      <div class="left flex-col">
        <img
          src="/img/logos/shoten-transparent.png"
          alt="Logo Shoten"
          class="logo-shoten"
        />
        <form @submit.prevent="handleRegister" class="form-signup flex-col">
          <div class="form-group">
            <IconsFormsUser></IconsFormsUser>
            <input
              v-model="form.name"
              type="text"
              id="name"
              name="name"
              placeholder="Votre pseudo"
            />
          </div>

          <div class="form-section flex">
            <div class="form-group">
              <IconsFormsMail></IconsFormsMail>
              <input
                v-model="form.email"
                type="mail"
                id="email"
                name="email"
                placeholder="Mail*"
                required
              />
            </div>
            <div class="form-group">
              <IconsFormsConfirm></IconsFormsConfirm>
              <input
                v-model="form.email_confirmation"
                type="mail"
                id="mailConfirm"
                name="mailConfirm"
                placeholder="Confirmation*"
                required
              />
            </div>
          </div>
          <div class="form-section flex">
            <div class="form-group">
              <IconsFormsPassword></IconsFormsPassword>
              <input
                v-model="form.password"
                type="password"
                id="password"
                name="password"
                placeholder="Mot de passe*"
                required
              />
            </div>

            <div class="form-group">
              <IconsFormsConfirm></IconsFormsConfirm>
              <input
                v-model="form.password_confirmation"
                type="password"
                id="passwordConfirm"
                name="passwordConfirm"
                placeholder="Confirmation*"
                required
              />
            </div>
          </div>

          <button type="submit" class="form-btn-submit">M'inscrire</button>
        </form>
        <div class="bottom-left flex-col">
          <nav>
            <ul class="flex">
              <li>Mentions légales</li>
              <li>Confidentialités</li>
            </ul>
          </nav>
          <p class="copyright">© 2023 Shoten. Tous droits réservés.</p>
        </div>
      </div>
      <div class="right">
        <div class="right-sidebar">
          <h1>登録する</h1>
          <h2>Inscrivez-vous</h2>
          <div class="social-media-logs flex">
            <img src="/icons/logos/Facebook.svg" alt="Signup with Facebook" />
            <img src="/icons/logos/Apple.svg" alt="Signup with Apple" />
            <img src="/icons/logos/Google.svg" alt="Signup with Google" />
          </div>
          <div class="rule"></div>
          <section class="sidebar-section flex-col">
            <h3>ログイン</h3>
            <h4>Vous avez déjà un compte?</h4>
            <NuxtLink to="/auth/login">Connectez-vous</NuxtLink>
          </section>
        </div>
      </div>
    </div>
  </main>
</template>

<script setup>
import { useAuthStore } from "~/stores/useAuthStore";
const auth = useAuthStore();
definePageMeta({
  layout: "content",
  middleware: ["guest"],
});

const form = ref({
  name: "",
  email: "",
  password: "",
  password_confirmation: "",
  email_confirmation: "",
});

async function handleRegister() {
  await auth.register(form.value)

  await auth.login({
    email: form.value.email,
    password: form.value.password
  })

  if (auth.user) {
    navigateTo("/account")
  }   
}


</script>

<style scoped lang="scss">
main {
  h1 {
    text-align: right;
    font-size: 5rem;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    color: $main-color;
  }
}
.background-image {
  position: relative;
  min-width: 100vw;
  min-height: 100vh;
  overflow: hidden;
  background: url("/img/background/background-login.jpg"),
    lightgray 50% / cover no-repeat;
  filter: blur(15px);
  -webkit-filter: blur(15px);
  -moz-filter: blur(15px);
  -o-filter: blur(15px);
  -ms-filter: blur(15px);
  z-index: -1;
}
.register-wrapper {
  display: flex;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 90vw;
  height: 90vh;
  border-radius: 3.75rem;
  background: linear-gradient(
    180deg,
    rgba(20, 32, 52, 0.94) 0%,
    rgba(20, 32, 52, 0.7) 100%
  );
  padding: 2em;
  color: $light-text-color;
  .left {
    align-items: center;
    width: 100%;
    height: 100%;
    .bottom-left {
      .copyright {
        font-size: 1.25rem;
        text-align: center;
        margin-top: 1rem;
      }
      nav {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 3rem;
        ul {
          gap: 3rem;
          font-size: 2.25rem;
          list-style: none;
          li {
            cursor: pointer;
          }
        }
      }
    }
    .logo-shoten {
      margin-top: 8rem;
      width: 11rem;
      height: 11rem;
    }
  }
  .form-signup {
    width: 100%;
    height: 85%;
    align-items: center;
    margin-top: 5rem;
    gap: 2rem;
    .form-group {
      &::after {
        content: "";
        display: block;
        margin: auto;
        width: 80%;
        height: 2px;
        background-color: $main-color;
        margin-top: 1rem;
      }
      input {
        text-align: center;
        color: $light-text-color;
        font-size: 3rem;
        border: 0;
        background-color: transparent;
        outline: none;
      }
    }
  }
  .right-sidebar {
    display: flex;
    white-space: nowrap;
    flex-direction: column;
    width: 100%;
    height: 100%;
    padding: 1rem;
    h1 {
      font-size: 8rem;
      text-align: right;
      color: $main-color;
    }
    h2 {
      font-size: 3rem;
      text-align: right;
      color: $light-text-color;
      font-weight: 200;
      margin-top: -2.5rem;
      margin-bottom: 2.5rem;
    }
    .social-media-logs {
      justify-content: space-around;
      align-items: center;
    }

    .rule {
      content: "";
      display: block;
      margin: 5rem 0 5rem 0;
      width: 100%;
      height: 2px;
      background-color: $main-color;
    }
    .sidebar-section {
      justify-content: center;
      align-items: center;
      gap: 2rem;
      h3 {
        font-size: 3rem;
        color: $main-color;
      }
      h4 {
        font-size: 2rem;
        font-weight: 200;
        text-align: center;
      }
      a {
        color: $main-color;
        text-decoration: none;
        font-size: 2rem;
        font-weight: 400;
        cursor: pointer;
      }
    }
  }
}

//Widths & heights for divs left & right in the login wrapper
.left {
  width: 100%;
  height: 100%;
  .bottom-left {
    white-space: nowrap;
    width: 100%;
    height: 15%;
  }
}

.right {
  width: 50%;
  height: 100%;
}

//Back button at the left corner of the login wrapper
.back-arrow {
  position: absolute;
  top: 1rem;
  left: 1rem;
  cursor: pointer;
  &:hover {
    transform: scale(1.5);
    transition: 0.5s;
  }
}

.top-page {
  display: none;
  gap: 2rem;
}

//880 x 700 pixels
@media screen and (max-width: 880px), screen and (max-height: 700px) {
  main {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
  }
  .background-image {
    min-height: 100rem;
  }
  .top-page {
    display: flex;
    justify-content: space-around;
    align-items: center;
    left: 0;
    position: absolute;
    top: 1rem;
    left: 5rem;
    z-index: 10;
    .logo-shoten-top {
      width: 8rem;
      height: 7rem;
    }
    h2 {
      font-size: 2rem;
      text-align: right;
      color: $light-text-color;
      font-weight: lighter;
      margin-top: -2.5rem;
      margin-bottom: 2.5rem;
    }
  }
  .left,
  .right {
    width: 100%;
    height: 100%;
  }
  .register-wrapper {
    padding: 3rem;
    flex-direction: column;
    align-items: center;
    top: 560px;
    height: fit-content;
    .logo-shoten,
    h1,
    h2 {
      display: none;
    }
    .bottom-left {
      .copyright {
        font-size: 1.25rem;
      }
      nav ul li {
        font-size: 1.5rem;
      }
      order: -1;
    }
    .social-media-logs {
      order: 4;
    }
    .form-signup {
      button[type="submit"] {
        font-size: 1.5rem;
        height: auto;
        width: auto;
        padding: 1rem;
      }
    }
    .form-group {
      width: 90%;
      margin-bottom: 1rem;
      input[type="text"],
      input[type="mail"],
      input[type="password"] {
        font-size: 1.5rem;
        width: 80%;
      }
    }

    .form-section {
      flex-direction: column;
      width: 100%;
      justify-content: center;
      align-items: center;
    }
  }
  .right-sidebar {
    margin-top: 2rem;
    .sidebar-section {
      a {
        text-decoration: underline;
        margin-bottom: 1rem;
      }
    }
  }
}
</style>

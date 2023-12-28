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
        <h1>再初期化装置</h1>
        <h2>Réinitialisation du mot de passe</h2>
      </div>
    </div>
    <div class="reset-wrapper">
      <form class="form-reset flex-col" method="POST">
        
        <p class="form-text">
          Entrez les informations relatives à votre compte.
        </p>
        <div class="form-group">
          <div class="group flex">
            <IconsFormsUser></IconsFormsUser>
            <input type="mail" id="mail" name="mail" placeholder="Mail*" />
          </div>
        </div>
        <div class="form-group">
          <div class="group flex">
            <IconsFormsConfirm></IconsFormsConfirm>
            <input
              type="mail"
              id="confirmMail"
              name="confirmMail"
              placeholder="Confirmation*"
            />
          </div>
        </div>
        <p class="form-text info">
          <span class="requiredInput">*</span>champs requis
        </p>
        <p class="form-text">
          Si un compte a été trouver grâce à ce mail, vous recevrez un lien de
          récupération.
        </p>
        <button type="submit" class="form-btn-submit">
          Réinitialiser mon mot de passe
        </button>
      </form>
    </div>
  </main>
</template>

<script setup>
definePageMeta({
  layout: "content",
  middleware: ["guest"],
})
</script>

<style scoped lang="scss">
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
.top-page {
  width: 85%;
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
    text-align: center;
    color: $light-text-color;
    font-weight: lighter;
    margin-top: -1rem;
  }
  .titles {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    h1 {
      font-size: 3rem;
      color: $main-color;
    }
  }
}
.reset-wrapper {
  display: flex;
  justify-content: space-around;
  align-items: center;
  position: absolute;
  top: 420px;
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
  color: $light-text-color;
  gap: 5rem;
  .form-reset {
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    .form-group { 
      width: 100%;
      margin: auto;
    }
    .form-text {
      text-align: center;
      font-size: 1.5rem;
      margin-top: 1rem;
      margin-bottom: 1rem;
      font-weight: lighter;
    }

    .form-btn-submit {
      margin-top: 2rem;
      width: fit-content;
      height: 7rem;
      padding: 0.5rem;
      border-radius: 1.25rem;
      background-color: $main-color;
      border: none;
      text-align: center;
      margin: auto;
      font-weight: 400;
      font-size: 2rem;
    }

    .info {
      font-weight: bold;
    }
  }
}
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

@media screen and (min-width: 768px) {
  .top-page {
    top: 10%;
    left: 10%;
  }
  
}
</style>

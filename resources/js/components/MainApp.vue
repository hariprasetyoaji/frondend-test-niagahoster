<template>
    <div id="main">
        <Header />
        <div class="content">
            <router-view></router-view>
        </div>
        <Footer />
    </div>
</template>

<script>
import Header from "./Header";
import Footer from "./Footer";
export default {
    name: "main-app",
    components: { Header, Footer }
};
</script>

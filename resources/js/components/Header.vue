<script setup lang="ts">

</script>

<template>
    <header>
        <RouterLink to="/">
            <h1>
                Mathilde
            </h1>
        </RouterLink>
        <nav>
            <ul>
                <li>
                    <RouterLink to="/">Home</RouterLink>
                </li>
                <li><a href="https://github.com/Mathilde411">GitHub</a></li>
            </ul>
        </nav>
    </header>
</template>

<style scoped>
header {
    display: flex;
    flex-direction: row;
    width: 100%;

    a h1 {
        margin: 0 10px;
        font-size: 2.75rem;
    }

    nav {
        display: flex;
        flex-direction: row;
        flex: 1;

        ul {
            display: flex;
            flex-direction: row;
            margin: 0;
            padding-left: 10px;
            flex-grow: 1;

            li {
                list-style-type: none;
                padding: 0 10px;
                display: flex;
                flex-direction: row;
                align-items: center;

                a {
                    font-size: 1.25rem;
                    color: var(--color-text);

                    &:hover {
                        color: var(--color-text-mute);
                    }
                }
            }
        }
    }
}


@media screen and (max-width: 768px) {
    header {
        flex-direction: column;
        a h1 {
            text-align: center;
        }
    }
}
</style>

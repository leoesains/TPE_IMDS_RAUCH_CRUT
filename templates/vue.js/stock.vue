{literal}
<section id="templateVueStock">
    <h2 class="titleAvisoDeRetiro" id="nameCartonero">Stock por cartonero</h2>
    <table>
        <thead>
            <tr>
                <th v-for="name in columns">
                 {{name | capitalize}}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="entry in stock">
                <td v-for="name in columns">
                    {{entry[name]}}
                </td>
            </tr>
            <td v-if=!stock.length :colspan="columns.length"> No cargó materiales aún </td>
        </tbody>
    </table>
    <p v-show=stock.length style="background-color:white;"> Cantidad de kilos acumulados: <span id=cantTotal></span><p>
</section>
{/literal}
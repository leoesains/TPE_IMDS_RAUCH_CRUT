{literal}
<section id="templateVueStock">
    <p>Stock por cartonero</p>
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
        </tbody>
    </table>
    <p style="background-color:white;"> Cantidad de kilos acumulados: <span id=cantTotal></span><p>
</section>
{/literal}
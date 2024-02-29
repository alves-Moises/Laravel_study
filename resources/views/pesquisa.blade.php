<form 
    method="post" 
    action="" 
    name="formFiltros" 
    id="formFiltros"
>
    @csrf 
    <div class="filtros">
        <div>
            <input 
                type="text" 
                name="name" 
                id="name" 
                placeholder="Pesquisar por nome:"
            >
        </div>

        <div>
            <div>
                <input 
                    type="date" 
                    name="startDate" 
                    id="searchStartDate"
                > 
                à
                <input 
                    type="date" 
                    name="endDate" 
                    id="searchEndDate"
                >
            </div>
        </div>

        <div>
            <input 
                type="submit" 
                value="Buscar"
            >
        </div>
    </div>
</form>
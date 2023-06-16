<x-layout>
    <link rel="stylesheet" href="/css/cadastroE.css">
    <form>
        <div class="form-group">
          <h3>Empresa</h3>
          <label for="empresaNome">Nome da Empresa:</label>
          <input type="text" id="empresaNome" name="empresaNome" required>
        </div>
        
        <div class="form-group">
          <h3>Funcionários</h3>
          <div class="funcionario-group">
            <label for="funcionarioNome">Nome do Funcionário:</label>
            <input type="text" id="funcionarioNome" name="funcionarioNome" required>
          </div>
          
          <div id="funcionariosAdicionais"></div>
          
          <button type="button" onclick="adicionarFuncionario()">Adicionar Funcionário</button>
        </div>
        
        <div class="form-group setor-group">
          <h3>Setores</h3>
          <label for="setorNome">Nome do Setor:</label>
          <input type="text" id="setorNome" name="setorNome" required>
          
          <label for="funcionarioSetor">Funcionário(s) vinculado(s) ao Setor:</label>
          <select id="funcionarioSetor" name="funcionarioSetor" multiple>
            <!-- Opções de funcionários serão adicionadas dinamicamente pelo JavaScript -->
          </select>
        </div>
        
        <button type="submit">Cadastrar</button>
      </form>
</x-layout>
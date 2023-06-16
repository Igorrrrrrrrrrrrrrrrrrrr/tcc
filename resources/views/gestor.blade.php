<x-layout>
    <link rel="stylesheet" href="/css/gestor.css">
   <form>
    <div class="container">
        <h2>Cadastro de Empresa</h2>
        <form>
          <div class="form-group">
            <label for="nome">Nome da Empresa:</label>
            <input type="text" id="nome" name="nome" required>
          </div>
          <div class="form-group">
            <label for="cnpj">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj" required>
          </div>
          <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
          </div>
          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required>
          </div>
          <div class="form-group">
            <input type="submit" value="Cadastrar">
          </div>
        </form>
    </form>
</x-layout>
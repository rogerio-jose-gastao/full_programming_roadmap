# **Princípios SOLID: Uma Visão Detalhada**

Os **Princípios SOLID** são um conjunto de diretrizes para design de software que visam criar sistemas mais compreensíveis, flexíveis e fáceis de manter.

### **Princípios SOLID:**

#### 1. 🎯 **Princípio da Responsabilidade Única (Single Responsibility Principle - SRP):**
   - Uma classe deve ter apenas uma razão para mudar, ou seja, deve ter apenas uma responsabilidade.

#### 2. 🤝 **Princípio da Abertura/Fechamento (Open/Closed Principle - OCP):**
   - Entidades de software (classes, módulos, funções) devem estar abertas para extensão, mas fechadas para modificação.

#### 3. 🔗 **Princípio da Substituição de Liskov (Liskov Substitution Principle - LSP):**
   - Objetos de uma classe derivada devem poder substituir objetos de sua classe base sem afetar a corretude do programa.

#### 4. 🔄 **Princípio da Segregação de Interface (Interface Segregation Principle - ISP):**
   - Uma classe não deve ser forçada a implementar interfaces que ela não usa. Clientes não devem ser forçados a depender de interfaces que não utilizam.

#### 5. 🔒 **Princípio da Inversão de Dependência (Dependency Inversion Principle - DIP):**
   - Módulos de alto nível não devem depender de módulos de baixo nível. Ambos devem depender de abstrações. Além disso, abstrações não devem depender de detalhes; detalhes devem depender de abstrações.

### **Referências e Leituras Adicionais:**

- 📘 **"Clean Code: A Handbook of Agile Software Craftsmanship"** por Robert C. Martin.
- 📗 **"Design Patterns: Elements of Reusable Object-Oriented Software"** por Erich Gamma, Richard Helm, Ralph Johnson e John Vlissides.

A aplicação consistente dos princípios SOLID leva a um design de software mais modular, extensível e resiliente às mudanças.

### **Exemplificação dos Princípios SOLID:**

#### Exemplo - Princípio da Responsabilidade Única (SRP):

```python
class Relatorio:
    def gerar_relatorio(self, dados):
        # Lógica para gerar o relatório

class EnviarEmail:
    def enviar_email(self, destinatario, mensagem):
        # Lógica para enviar e-mail
